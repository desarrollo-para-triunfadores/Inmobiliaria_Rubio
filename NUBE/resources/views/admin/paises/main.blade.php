@extends('admin.partes.index')

@section('title')
Paises registrados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Paises
            <small>registros almacenados</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-suitcase"></i> Generales</a></li>
            <li>Lugares</li>
            <li class="active">Paises</li>
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
                                    <th>Nombre</th>
                                    <th>Cantidad de provincias asociadas</th>                               
                                    <th>Fecha alta</th>
                                    <th>Acciones</th>               
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Cantidad de provincias asociadas</th>                               
                                    <th>Fecha alta</th>
                                    <th>Acciones</th>      
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($paises as $pais)
                                <tr>
                                    <td>{{$pais->nombre}}</td>
                                    <td>{{$pais->provincias->count()}}</td>       
                                    <td>{{$pais->created_at->format('d/m/Y')}}</td>
                                    <td>  
                                        <a onclick="completar_campos({{$pais}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a onclick="abrir_modal_borrar({{$pais->id}})" title="Eliminar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                    <div class="box-footer">
                        <button title="Registrar un país" type="button" id="boton-modal-crear" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-crear">
                            <i class="fa fa-plus-circle"></i> &nbsp;registrar país
                        </button>
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>

@include('admin.paises.formulario.create')
@include('admin.paises.formulario.editar')
@include('admin.paises.formulario.confirmar')

@endsection
@section('script') 
<script src="{{ asset('js/pais.js') }}"></script>
@endsection
