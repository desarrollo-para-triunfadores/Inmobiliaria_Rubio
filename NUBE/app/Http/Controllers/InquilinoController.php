<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Inquilino;
use App\Provincia;
use App\Auditoria;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use App\Http\Requests\InquilinoRequestCreate;
use App\Http\Requests\InquilinoRequestEdit;
use Illuminate\Http\Request;


class InquilinoController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $inquilino = Inqulino::all();
        if ($inquilinos->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
            return view('admin.inquilinos.sinRegistros'); //se devuelve la vista para crear un registro
        } else {
            return view('admin.inquilinos.tabla')->with('inquilinos',$inquilinos); // se devuelven los registros
        }
    }


    public function create()
    {
        return view('admin.inquilinos.create');
    }


    public function store(InquilinoRequestCreate $request)
    {
        $inquilino = new Inquilino($request->all());
        $inquilino->save();
        Flash::success('El país "'. $inquilino->nombre.'" ha sido registrado de forma existosa.');

        /** Auditoria almacena creacion */
        $auditoria = new Auditoria();
        $auditoria->tabla = "inquilinos";
        $auditoria->elemento_id = $inquilino->id;
        $autor = new Auth();
        $autor->id = Auth::user()->id;          //Conseguimos el id del usuario actualmente logueado
        $auditoria->usuario_id = $autor->id;    //lo asignamos a la auditorias
        $auditoria->accion = "alta";
        $auditoria->dato_nuevo = "nombre: ".$inquilino->nombre;
        $auditoria->dato_anterior = null;
        $auditoria->save();
        return redirect()->route('admin.inquilinos.index');
    }


    public function show($id)
    {
        $inquilino = Inquilino::find($id);
        return view('admin.inquilinos.show')->with('inquilino',$inquilino);
    }


    public function edit($id)
    {
    }


    public function update(InquilinoRequestEdit $request, $id)
    {
        $inquilino = Inquilino::find($id);
        $dato_anterior = $inquilino->nombre;        //obtenemos el 'nombre' del registro antes de sobreescribirlo
        $inquilino->fill($request->all());
        $inquilino->save();
        Flash::success("Se ha realizado la actualización del registro: ".$inquilino->nombre.".");
        /** Auditoria actualizacion */
        $auditoria = new Auditoria();
        $auditoria->tabla = "inquilinos";
        $auditoria->elemento_id = $inquilino->id;
        $autor = new Auth();
        $autor->id = Auth::user()->id;          //Conseguimos el id del usuario actualmente logueado
        $auditoria->usuario_id = $autor->id;    //lo asignamos a la auditorias
        $auditoria->accion = "modificacion";
        $auditoria->dato_nuevo = "nombre: ".$inquilino->nombre;
        $auditoria->dato_anterior = $dato_anterior;
        $auditoria->save();
        return redirect()->route('admin.inquilinos.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inquilino = Inquilino::find($id);
        $dato_anterior = $inquilino->nombre;

        /** Auditoria eliminación */
        $auditoria = new Auditoria();
        $auditoria->tabla = "inquilinos";
        $auditoria->elemento_id = $inquilino->id;
        $autor = new Auth();
        $autor->id = Auth::user()->id;          //Conseguimos el id del usuario actualmente logueado
        $auditoria->usuario_id = $autor->id;    //lo asignamos a la auditorias
        $auditoria->accion = "eliminacion";

        $auditoria->dato_anterior = $dato_anterior;
        $auditoria->save();
        $inquilino->delete();

        Flash::error("Se ha realizado la eliminación del registro: ".$inquilino->nombre.".");
        return redirect()->route('admin.inquilinos.index');
    }
}
