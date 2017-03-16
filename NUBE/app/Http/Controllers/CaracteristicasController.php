<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ambiente;
use App\Localidad;
use App\Caracteristia;
use App\Auditoria;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use Carbon\Carbon;
use App\Http\Requests\caracteristicaRequestCreate;
use App\Http\Requests\caracteristicaRequestEdit;

class AMbientesController extends Controller
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
        $caracteristicas = Ambiente::all();
        if ($caracteristicas->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
            return view('admin.caracteristicas.sinRegistros')->with('caracteristicas', $caracteristicas); //se devuelve la vista para crear un registro
        } else {
            return view('admin.caracteristicas.tabla')->with('caracteristicas', $caracteristicas)->with('caracteristicas', $caracteristicas); // se devuelven los registros
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('admin.caracteristicas.create');
    }


    public function store(caracteristicaRequestCreate $request)
    {   
        $caracteristica = new caracteristica($request->all());
        $caracteristica->save();
        Flash::success('La caracteristica "'. $caracteristica->nombre.'" ha sido registrada de forma existosa.');
        /** Auditoria almacena creacion */
        $auditoria = new Auditoria();
        $auditoria->tabla = "caracteristicas";
        $auditoria->elemento_id = $caracteristica->id;
        $autor = new Auth();
        $autor->id = Auth::user()->id;          //Conseguimos el id del usuario actualmente logueado
        $auditoria->usuario_id = $autor->id;    //lo asignamos a la auditorias
        $auditoria->accion = "alta";
        $auditoria->dato_nuevo = "nombre: ".$caracteristica->nombre."|| caracteristica_id: ".$caracteristica->caracteristica_id;
        $auditoria->dato_anterior = null;
        $auditoria->save();
        return redirect()->route('admin.caracteristicas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caracteristicaes = Caracteristia::all()->lists('nombre','id');
        $caracteristica = caracteristica::find($id);
        return view('admin.caracteristicas.show')
            ->with('caracteristica', $caracteristica)
            ->with('caracteristicaes', $caracteristicaes);
    }


    public function update(AmbienteRequestEdit $request, $id)
    {
        $caracteristica = caracteristica::find($id);
        $dato_anterior = "nombre: ".$caracteristica->nombre."|| caracteristica_id: ".$caracteristica->caracteristica_id;        //obtenemos el 'nombre' del registro antes de sobreescribirlo
        $caracteristica->fill($request->all());
        $caracteristica->save();

        /** Auditoria actualizacion */
        $auditoria = new Auditoria();
        $auditoria->tabla = "caracteristicas";
        $auditoria->elemento_id = $caracteristica->id;
        $autor = new Auth();
        $autor->id = Auth::user()->id;          //Conseguimos el id del usuario actualmente logueado
        $auditoria->usuario_id = $autor->id;    //lo asignamos a la auditorias
        $auditoria->accion = "modificacion";
        $auditoria->dato_nuevo = "nombre: ".$caracteristica->nombre."|| caracteristica_id: ".$caracteristica->caracteristica_id;
        $auditoria->dato_anterior = $dato_anterior;
        $auditoria->save();

        Flash::success("Se ha realizado la actualización del registro: ".$caracteristica->nombre.".");
        return redirect()->route('admin.caracteristicas.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caracteristica = Ambiente::find($id);
        $dato_anterior ="nombre: ".$caracteristica->nombre." || caracteristica_id: ".$caracteristica->caracteristica_id;

        /** Auditoria eliminación */
        $auditoria = new Auditoria();
        $auditoria->tabla = "caracteristicas";
        $auditoria->elemento_id = $caracteristica->id;
        $autor = new Auth();
        $autor->id = Auth::user()->id;          //Conseguimos el id del usuario actualmente logueado
        $auditoria->usuario_id = $autor->id;    //lo asignamos a la auditorias
        $auditoria->accion = "eliminacion";

        $auditoria->dato_anterior = $dato_anterior;
        $auditoria->save();

        $caracteristica->delete();
        Flash::error("Se ha realizado la eliminación del registro: ".$caracteristica->nombre.".");
        return redirect()->route('admin.caracteristicas.index');
    }

    /** Esta funcion llama al metodo del modelo que obtiene las localidades ingresando id caracteristica */
    public function getLocalidades(Request $request, $id){
        if($request->ajax()){
            $localidadesDecaracteristica = Localidad::localidades($id);
            return response()->json($localidadesDecaracteristica);
        }
    }
}
