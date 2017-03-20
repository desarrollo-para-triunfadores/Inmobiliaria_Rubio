<?php

namespace App\Http\Controllers;

use App\Edificio;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Localidad;
use App\Provincia;
use App\Auditoria;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use App\Http\Requests\edificioRequestCreate;
use App\Http\Requests\edificioRequestEdit;
use Illuminate\Http\Request;


class EdificiosController extends Controller
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
        $edificios = Edificio::all();
        $localidades = Localidad::all()->pluck('nombre','id');
        if ($edificios->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
            return view('admin.edificios.sinRegistros')->with('localidades', $localidades); //se devuelve la vista para crear un registro
        } else {
            return view('admin.edificios.tabla')->with('edificios',$edificios)->with('localidades', $localidades); // se devuelven los registros
        }
    }


    public function create()
    {
        return view('admin.edificios.create');
    }


    public function store(edificioRequestCreate $request)
    {
        $edificio = new edificio($request->all());
        $edificio->save();
        Flash::success('El país "'. $edificio->nombre.'" ha sido registrado de forma existosa.');

        /** Auditoria almacena creacion */
        $auditoria = new Auditoria();
        $auditoria->tabla = "edificios";
        $auditoria->elemento_id = $edificio->id;
        $autor = new Auth();
        $autor->id = Auth::user()->id;          //Conseguimos el id del usuario actualmente logueado
        $auditoria->usuario_id = $autor->id;    //lo asignamos a la auditorias
        $auditoria->accion = "alta";
        $auditoria->dato_nuevo = "nombre: ".$edificio->nombre;
        $auditoria->dato_anterior = null;
        $auditoria->save();
        return redirect()->route('admin.edificios.index');
    }


    public function show($id)
    {
        $edificio = edificio::find($id);
        return view('admin.edificios.show')->with('edificio',$edificio);
    }


    public function edit($id)
    {
    }


    public function update(edificioRequestEdit $request, $id)
    {
        $edificio = edificio::find($id);
        $dato_anterior = $edificio->nombre;        //obtenemos el 'nombre' del registro antes de sobreescribirlo
        $edificio->fill($request->all());
        $edificio->save();
        Flash::success("Se ha realizado la actualización del registro: ".$edificio->nombre.".");
        /** Auditoria actualizacion */
        $auditoria = new Auditoria();
        $auditoria->tabla = "edificios";
        $auditoria->elemento_id = $edificio->id;
        $autor = new Auth();
        $autor->id = Auth::user()->id;          //Conseguimos el id del usuario actualmente logueado
        $auditoria->usuario_id = $autor->id;    //lo asignamos a la auditorias
        $auditoria->accion = "modificacion";
        $auditoria->dato_nuevo = "nombre: ".$edificio->nombre;
        $auditoria->dato_anterior = $dato_anterior;
        $auditoria->save();
        return redirect()->route('admin.edificios.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edificio = edificio::find($id);
        $dato_anterior = $edificio->nombre;

        /** Auditoria eliminación */
        $auditoria = new Auditoria();
        $auditoria->tabla = "edificios";
        $auditoria->elemento_id = $edificio->id;
        $autor = new Auth();
        $autor->id = Auth::user()->id;          //Conseguimos el id del usuario actualmente logueado
        $auditoria->usuario_id = $autor->id;    //lo asignamos a la auditorias
        $auditoria->accion = "eliminacion";

        $auditoria->dato_anterior = $dato_anterior;
        $auditoria->save();
        $edificio->delete();

        Flash::error("Se ha realizado la eliminación del registro: ".$edificio->nombre.".");
        return redirect()->route('admin.edificios.index');
    }
}
