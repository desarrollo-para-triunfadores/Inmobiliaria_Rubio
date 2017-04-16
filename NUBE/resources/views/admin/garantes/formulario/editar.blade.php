<div class="modal fade" id="modal-update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Actualizar Garante</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form id="form-update" action="" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h3>Detalles del registro</h3>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-12 controls">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="input-icon right">
                                        <label>Nombre:</label>
                                        <input id="nombre" name="nombre" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-icon right">
                                        <label>Apellido:</label>
                                        <input id="apellido" name="apellido" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="col-sm-12 controls">
                            <div class="row">
                                <div class="col-xs-6">
                                    <label>Teléfono de contacto:</label>
                                    <input id="telefono" name="telefono" type="number" minlength="10" maxlength="15" class="form-control" placeholder="campo requerido" required>
                                </div>
                                <div class="col-xs-6">
                                    <label>Email de contacto:</label>
                                    <input id="email" name="email" type="email" class="form-control" placeholder="correo electronico del garante" required>
                                </div>
                            </div>
                        </div>
                        <br> <br> <br>
                        <div class="col-sm-12 controls">
                            <div class="row">
                                <div class="col-xs-6">
                                    <label>DNI:</label>
                                    <input id="dni" name="dni" type="text" maxlength="8" class="form-control" placeholder="campo requerido" required>
                                </div>
                                <div class="col-xs-6">
                                    <label>Fecha de nacimiento:</label>
                                    <input id="fecha_nac" name="fecha_nac" type="text" class="form-control" placeholder="campo requerido" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-sm-12 controls">
                            <div class="row">
                                <div class="col-xs-6">
                                    <label>Localidad</label>
                                    <select name="localidad_id" type="select" maxlength="50" class="form-control" placeholder="campo requerido" required>
                                        @foreach($localidades as $localidad)
                                            <option value="{{$localidad->id}}" selected="selected">{{$localidad->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <label>Domicilio:</label>
                                    <input id="domicilio" name="domicilio" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <button id="boton_submit_update" type="submit" class="btn btn-primary hide"></button>
                </form>  
                <br>               
            </div>
            <br><br>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">volver</button>
                <button type="button" class="btn  btn-warning" onclick="$('#boton_submit_update').click()">Actualizar Garante</button>
            </div>
        </div>
    </div>
</div>

<button type="button" id="boton-modal-update" class="btn btn-primary btn-lg hide" data-toggle="modal" data-target="#modal-update"></button>