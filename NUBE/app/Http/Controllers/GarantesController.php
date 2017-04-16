<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Garante;
use App\Localidad;
use App\Auditoria;
use App\Persona;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use App\Http\Requests\GaranteRequestCreate;
use App\Http\Requests\GaranteRequestEdit;
use Illuminate\Http\Request;
use Session;


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
        $garantes = Garante::all();
        $localidades = Localidad::all();
        if ($garantes->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
            return view('admin.garantes.sinRegistros')->with('localidades', $localidades); //se devuelve la vista para crear un registro
        } else {
            return view('admin.garantes.main')->with('garantes',$garantes)->with('localidades', $localidades); // se devuelven los registros
        }
    }


    public function create()
    {
        return view('admin.garantes.create');
    }

    public function store(Request $request)
    {
        /*datos de persona*/
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->dni = $request->dni;
        $persona->fecha_nac = $request->fecha_nac;
        $persona->telefono = $request->telefono;
        $persona->save();
        /*****************/
        $garante = new Garante();
        $garante->persona_id = $persona->id;
        $garante->localidad_id = $request->localidad_id;
        $garante->domicilio = $request->domicilio;
        $garante->descripcion = $request->descripcion;
        $garante->save();
        Session::flash('message', 'Se ha registrado un nuevo garante.');
        return redirect()->route('garantes.index');
    }


    public function show($id)
    {
        $garante = Garante::find($id);
        $localidades = Localidad::all();
        return view('admin.garantes.show')
            ->with('garante', $garante)
            ->with('localidades', $localidades);
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
        $garante = Garante::find($id);
        /*datos de persona*/
        $persona = Persona::find($garante->persona_id);
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->dni = $request->dni;
        $persona->fecha_nac = $request->fecha_nac;
        $persona->telefono = $request->telefono;
        $persona->save();
        /*****************/
        //$garante->fill($request->all());
        $garante->save();
        Session::flash('message', 'Se ha actualizado la información');
        return redirect()->route('garantes.index');
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
        $garante->delete();
        Session::flash('message', 'El garante ha sido eliminado del sistema');
        return redirect()->route('garantes.index');
    }
}
