@extends('admin.partes.index')

@section('title')
Garantes registradas
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Garantes
            <small>registros almacenados</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-suitcase"></i> Generales</a></li>
            <li>Lugares</li>
            <li class="active">Garantes</li>
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
                                    <th class="text-center">Inmueble</th>
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
                                @foreach($garantes as $garante)
                                <tr>
                                    <td class="text-center">{{$garante->id}}</td>
                                    <td class="text-center text-bold">{{$garante->apellido}}, {{$garante->nombre}}</td>
                                    <td class="text-center">{{--$garante->inmueble->nombre--}}-</td>
                                    <td class="text-center">{{$garante->dni}}</td>
                                    <td class="text-center">{{$garante->fecha_nac}} (edad)</td>
                                    <td class="text-center">{{$garante->telefono}}</td>
                                    <td class="text-center">{{$garante->domicilio}}</td>
                                    <td class="text-center">{{$garante->localidad->nombre}}</td>
                                    <td class="text-center">{{$garante->localidad->provincia->nombre}}</td>
                                    {{-- <td class="text-center">{{$garante->localidad->provincia->pais->nombre}}</td> --}}
                                    <td class="text-center">{{$garante->created_at->format('d/m/Y')}}</td>
                                    <td class="text-center">
                                        <a onclick="completar_campos({{$garante}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a onclick="abrir_modal_borrar({{$garante->id}})" title="Eliminar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                    <div class="box-footer">
                        <button title="Registrar un país" type="button" id="boton-modal-crear" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-crear">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar Garante
                        </button>
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>

@include('admin.garantes.formulario.create')
@include('admin.garantes.formulario.editar')
@include('admin.garantes.formulario.confirmar')

@endsection
@section('script') 
<script src="{{ asset('js/garante.js') }}"></script>
@endsection
