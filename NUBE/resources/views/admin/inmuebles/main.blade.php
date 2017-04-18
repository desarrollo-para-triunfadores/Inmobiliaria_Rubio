@extends('admin.partes.index')

@section('title')
    Inmuebles registradas
@endsection

@section('content')
    <div class="content-wrapper" style="min-height: 916px;">
        <section class="content-header">
            <h1>
                Propiedades
                <small>registros almacenados</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-suitcase"></i> Generales</a></li>
                <li>Inmuebles</li>
                <li class="active">Propiedades</li>
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
                            <form action="/admin/inmuebles" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div id="wizard">
                                    <h2>Datos generales</h2>
                                    <section>
                                        <legend>Datos generales</legend>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Tipo de inmueble</label>
                                                    <select style="width: 100%"  name="tipo_id"  placeholder="campo requerido"  class="select3 form-control">
                                                        @foreach($tipos as $tipo)
                                                            <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Tipo operación</label>
                                                    <select style="width: 100%"  name="condicion"  placeholder="campo requerido"  class="select3 form-control">
                                                        <option value="alquiler">Alquiler</option>
                                                        <option value="venta">Venta</option>
                                                        <option value="alquiler/venta">Alquiler/Venta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Valor para la venta</label>
                                                    <input name="valorVenta" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Valor para alquiler</label>
                                                    <input name="valorAlquiler" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Cantidad ambientes</label>
                                                    <input name="cantidadAmbientes" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Superficie total</label>
                                                    <input name="superficie" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Fecha de habilitación</label>
                                                    <input name="fechaHabilitacion" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Valor de las expensas</label>
                                                    <input name="expensaValor" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Descripción de las expensas</label>
                                                    <input name="expensaDescripcion" type="text" maxlength="500" class="form-control" placeholder="campo opcional. Ej: las expensas incluyen..." >
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h2>Datos del propietario</h2>
                                    <section>
                                        <legend>
                                            Datos del propietario
                                        </legend>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Propietario</label>
                                                <select style="width: 100%"  name="propietario_persona_id"  placeholder="campo requerido"  class="select3 form-control">
                                                    @foreach($personas as $persona)
                                                        <option value="{{$persona->id}}">{{$persona->nombre}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Localidad</label>
                                                <select style="width: 100%"  name="propietario_localidad_id"  placeholder="campo requerido"  class="select3 form-control">
                                                    @foreach($localidades as $localidad)
                                                        <option value="{{$localidad->id}}">{{$localidad->nombre}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nombre/s</label>
                                                <input name="propietario_nombre" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Apellido/s</label>
                                                <input name="propietario_apellido" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Documento</label>
                                                <input name="propietario_dni" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Teléfono</label>
                                                <input name="propietario_telefono" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Teléfono contacto</label>
                                                <input name="propietario_telefonoContacto" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Correo</label>
                                                <input name="propietario_correo" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Domicilio</label>
                                                <input name="propietario_direccion" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Información adicional del propietario</label>
                                                <input name="propietario_descripcion " type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                            </div>
                                        </div>
                                        <br>
                                    </section>
                                    <h2>Ubicación del inmueble</h2>
                                    <section>
                                        <legend>
                                            Ubicación del inmueble
                                        </legend>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Tipo de inmueble</label>
                                                    <select style="width: 100%"  name="edificio_id"  placeholder="campo requerido"  class="select3 form-control">
                                                        @foreach($edificios as $edificio)
                                                            <option value="{{$edificio->id}}">{{$edificio->nombre}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Tipo operación</label>
                                                    <select style="width: 100%"  name="barrio_id"  placeholder="campo requerido"  class="select3 form-control">
                                                        @foreach($barrios as $barrio)
                                                            <option value="{{$barrio->id}}">{{$barrio->nombre}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Direccion</label>
                                                    <input name="direccion" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Piso</label>
                                                    <input name="piso" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Departamento</label>
                                                    <input name="numDepto" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h2>Ubicación en el mapa</h2>
                                    <section>
                                        <legend>
                                            Ubicación en el mapa
                                        </legend>
                                        <div class="box-body">
                                            <div id="map" style="width:auto;height:350px;">
                                            </div>
                                            <input name="longitud" class="hide" id="longitud" type="text" >
                                            <input name="latitud" class="hide" id="latitud" type="text" >
                                        </div>
                                    </section>
                                    <h2>Fotos del inmueble</h2>
                                    <section>
                                        <legend>
                                            Fotos del inmueble
                                        </legend>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fotos</label>
                                                <input name="nombre" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Link del video</label>
                                                <input name="linkVideo" type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                            </div>
                                        </div>

                                        <br>
                                    </section>
                                    <h2>Características del inmueble</h2>
                                    <section>
                                        <legend>
                                            Características del inmueble
                                        </legend>
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Acción</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tabla_caracteristicas">
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Acción</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <hr>
                                        <br>
                                        <input name="cantidad_caracteristicas" class="hide" id="cantidad_caracteristicas" type="text" >
                                        <button title="Agregar una característica" type="button" id="boton-modal-crear" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-crear">
                                            <i class="fa fa-plus-circle"></i> &nbsp;Agregar característica
                                        </button>
                                    </section>
                                    <h2>Confirmación de datos</h2>
                                    <section>
                                        <legend>
                                            Confirmación de datos
                                        </legend>
                                        <div class="callout callout-info">
                                            <p style="font-size:14pt;">Está a punto de registrar el alta de un nuevo inmueble. Si usted se encuentra realmente seguro puede proseguir dando un click en registrar. Puede optar también por registrar a continuación los ambientes que serán asociados a este inmueble si así lo desea tildando el check de abajo.</p>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Información adicional acerca del inmueble</label>
                                                <input name="descripcion " type="text" maxlength="50" class="form-control" placeholder="campo requerido" >
                                            </div>
                                        </div>
                                        <br>
                                        <input type="checkbox" name="registrar_ambientes"> Deseo registrar los ambientes asociados a este inmueble.<br>
                                    </section>
                                </div>
                                <!-- Botones ocultos-->
                                <button type="button" id="boton-modal-crear" class="hide" data-toggle="modal" data-target="#modal-crear"> </button>
                                <input type="submit" id="enviar_datos" class="hide" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    @include('admin.inmuebles.formulario.create')
    @include('admin.inmuebles.formulario.elemento_seleccionado')


@endsection
@section('script')
    <script src="{{ asset('js/inmueble.js') }}"></script>
@endsection
