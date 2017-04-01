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
use Session;


class InquilinosController extends Controller
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
        $inquilinos = Inquilino::all();

        if ($inquilinos->count()==0){ // la funcion count te devuelve la cantidad de registros contenidos en la cadena
            return view('admin.inquilinos.sinRegistros'); //se devuelve la vista para crear un registro
        } else {
            return view('admin.inquilinos.main')->with('inquilinos',$inquilinos); // se devuelven los registros
        }
    }


    public function create()
    {
        return view('admin.inquilinos.create');
    }


    public function store(Request $request)
    {
        $inquilino = new Inquilino($request->all());
        $inquilino->save();
        Session::flash('message', 'Se ha registrado un nuevo inquilino.');
        return redirect()->route('inquilinos.index');
    }


    public function show($id)
    {
        $inquilino = Inquilino::find($id);
        $localidades = Localidad::all();
        return view('admin.inquilinos.show')
            ->with('inquilino', $inquilino)
            ->with('localidades', $localidades);
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
        $inquilino = Inquilino::find($id);
        $inquilino->fill($request->all());
        $inquilino->save();
        Session::flash('message', 'Se ha actualizado la información');
        return redirect()->route('inquilinos.index');
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
        $inquilino->delete();
        Session::flash('message', 'El inquilino ha sido eliminado del sistema');
        return redirect()->route('inquilinos.index');
    }
}
