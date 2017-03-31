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
        $localidades = Localidad::all();
        if ($edificios->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
            return view('admin.edificios.sinRegistros')->with('localidades', $localidades); //se devuelve la vista para crear un registro
        } else {
            return view('admin.edificios.main')->with('edificios',$edificios)->with('localidades', $localidades); // se devuelven los registros
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
        ion::flash('message', 'Se ha registrado un nuevo edificio en la localidad de '.$edificio->localidad.'.');
        return redirect()->route('edificio.index');
    }


    public function show($id)
    {
        $edificio = edificio::find($id);
        $localidades = Localidad::all()->lists('nombre','id');
        return view('admin.edificios.show')
            ->with('edificio', $edificio)
            ->with('localidades', $localidades);
    }


    public function edit($id)
    {
    }


    public function update(edificioRequestEdit $request, $id)
    {
        $edificio = edificio::find($id);
        $edificio->fill($request->all());
        $edificio->save();
        Session::flash('message', 'Se ha actualizado la información');
        return redirect()->route('edificios.index');
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
        $edificio->delete();
        Session::flash('message', 'El edificio ha sido eliminado del sistema');
        return redirect()->route('admin.edificios.index');
    }
}
