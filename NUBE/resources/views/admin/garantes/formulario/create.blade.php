<div class="modal fade" id="modal-crear">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Registrar Garante</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form action="/admin/garantes" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">                                                           
                    <h3>Detalles del registro</h3>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-12 controls">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="input-icon right">
                                        <label>Nombre:</label>
                                        <input name="nombre" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-icon right">
                                        <label>Apellido:</label>
                                        <input name="apellido" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-sm-12 controls">
                            <div class="row">
                                <br>
                                <div class="col-xs-6">
                                    <label>Teléfono de contacto:</label>
                                    <input name="telefono" type="number" minlength="10" maxlength="15" class="form-control" placeholder="campo requerido" required>
                                </div>
                                <br>
                                <div class="col-xs-6">
                                    <label>Email de contacto:</label>
                                    <input name="email" type="email" class="form-control" placeholder="correo electronico del garante" required>
                                </div>
                            </div>
                        </div>
                        <br> <br> <br>
                        <div class="col-sm-12 controls">
                            <div class="row">
                                <div class="col-xs-6">
                                    <label>DNI:</label>
                                    <input name="dni" type="number" maxlength="8" class="form-control" placeholder="campo requerido" required>
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
                                    <input name="domicilio" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <br><br>
                    <button id="boton_submit_crear" type="submit" class="btn btn-primary hide"></button>
                </form>
            </div>
            <br><br><br>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">volver</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_crear').click()">Registrar Garante</button>
            </div>
        </div>          
    </div>
</div>