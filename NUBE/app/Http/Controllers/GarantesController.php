<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Garante;
use App\Provincia;
use App\Auditoria;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use App\Http\Requests\GaranteRequestCreate;
use App\Http\Requests\GaranteRequestEdit;
use Illuminate\Http\Request;


class GarantesController extends Controller
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
        $garante = Inqulino::all();
        if ($garantes->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
            return view('admin.garantes.sinRegistros'); //se devuelve la vista para crear un registro
        } else {
            return view('admin.garantes.tabla')->with('garantes',$garantes); // se devuelven los registros
        }
    }


    public function create()
    {
        return view('admin.garantes.create');
    }


    public function store(GaranteRequestCreate $request)
    {
        $garante = new Garante($request->all());
        $garante->save();
        Flash::success('El país "'. $garante->nombre.'" ha sido registrado de forma existosa.');

        /** Auditoria almacena creacion */
        $auditoria = new Auditoria();
        $auditoria->tabla = "garantes";
        $auditoria->elemento_id = $garante->id;
        $autor = new Auth();
        $autor->id = Auth::user()->id;          //Conseguimos el id del usuario actualmente logueado
        $auditoria->usuario_id = $autor->id;    //lo asignamos a la auditorias
        $auditoria->accion = "alta";
        $auditoria->dato_nuevo = "nombre: ".$garante->nombre;
        $auditoria->dato_anterior = null;
        $auditoria->save();
        return redirect()->route('admin.garantes.index');
    }


    public function show($id)
    {
        $garante = Garante::find($id);
        return view('admin.garantes.show')->with('garante',$garante);
    }


    public function edit($id)
    {
    }


    public function update(GaranteRequestEdit $request, $id)
    {
        $garante = Garante::find($id);
        $dato_anterior = $garante->nombre;        //obtenemos el 'nombre' del registro antes de sobreescribirlo
        $garante->fill($request->all());
        $garante->save();
        Flash::success("Se ha realizado la actualización del registro: ".$garante->nombre.".");
        /** Auditoria actualizacion */
        $auditoria = new Auditoria();
        $auditoria->tabla = "garantes";
        $auditoria->elemento_id = $garante->id;
        $autor = new Auth();
        $autor->id = Auth::user()->id;          //Conseguimos el id del usuario actualmente logueado
        $auditoria->usuario_id = $autor->id;    //lo asignamos a la auditorias
        $auditoria->accion = "modificacion";
        $auditoria->dato_nuevo = "nombre: ".$garante->nombre;
        $auditoria->dato_anterior = $dato_anterior;
        $auditoria->save();
        return redirect()->route('admin.garantes.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $garante = Garante::find($id);
        $dato_anterior = $garante->nombre;

        /** Auditoria eliminación */
        $auditoria = new Auditoria();
        $auditoria->tabla = "garantes";
        $auditoria->elemento_id = $garante->id;
        $autor = new Auth();
        $autor->id = Auth::user()->id;          //Conseguimos el id del usuario actualmente logueado
        $auditoria->usuario_id = $autor->id;    //lo asignamos a la auditorias
        $auditoria->accion = "eliminacion";

        $auditoria->dato_anterior = $dato_anterior;
        $auditoria->save();
        $garante->delete();

        Flash::error("Se ha realizado la eliminación del registro: ".$garante->nombre.".");
        return redirect()->route('admin.garantes.index');
    }
}
