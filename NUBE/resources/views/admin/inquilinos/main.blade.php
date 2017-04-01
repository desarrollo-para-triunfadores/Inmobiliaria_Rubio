@extends('admin.partes.index')

@section('title')
Inquilinos registradas
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Inquilinos
            <small>registros almacenados</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-suitcase"></i> Generales</a></li>
            <li>Lugares</li>
            <li class="active">Inquilinos</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <br>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <h3 class="box-title"> Registros</h3>
                    </div>
                    <div class="box-body ">                            
                        @include('admin.partes.msj_acciones')
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">DNI</th>
                                    <th class="text-center">Fecha de Nacimiento</th>
                                    <th class="text-center">Teléfono</th>
                                    <th class="text-center">Domicilio</th>
                                    <th class="text-center">Localidad</th>
                                    <th class="text-center">Provincia</th>
                                    {{-- <th class="text-center">Pais</th> --}}
                                    <th class="text-center">Fecha alta</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inquilinos as $inquilino)
                                <tr>
                                    <td class="text-center">{{$inquilino->id}}</td>
                                    <td class="text-center text-bold">{{$inquilino->nombre}} {{$inquilino->apellido}}</td>
                                    <td class="text-center">{{$inquilino->dni}}</td>
                                    <td class="text-center">{{$inquilino->fecha_nac}} (edad)</td>
                                    <td class="text-center">{{$inquilino->telefono}}</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">{{--$inquilino->inmueble->--}} - </td>
                                    <td class="text-center">{{--$inquilino->localidad->provincia->nombre--}}-</td>
                                    {{-- <td class="text-center">{{$inquilino->localidad->provincia->pais->nombre}}</td> --}}
                                    <td class="text-center">{{$inquilino->created_at->format('d/m/Y')}}</td>
                                    <td class="text-center">
                                        <a onclick="completar_campos({{$inquilino}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a onclick="abrir_modal_borrar({{$inquilino->id}})" title="Eliminar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                    <div class="box-footer">
                        <button title="Registrar un país" type="button" id="boton-modal-crear" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-crear">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar Inquilino
                        </button>
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>

@include('admin.inquilinos.formulario.create')
@include('admin.inquilinos.formulario.editar')
@include('admin.inquilinos.formulario.confirmar')

@endsection
@section('script') 
<script src="{{ asset('js/inquilino.js') }}"></script>
@endsection
