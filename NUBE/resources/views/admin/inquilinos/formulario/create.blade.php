<div class="modal fade" id="modal-crear">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Registrar Inquilino</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form action="/admin/inquilinos" method="POST">
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
                            <br>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="input-icon right">
                                        <label>DNI:</label>
                                        <input name="dni" type="text" maxlength="8" class="form-control" placeholder="campo requerido" required>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-icon right">
                                        <label>Fecha Nacimiento:</label>
                                        <input id="fecha_nac" name="fecha_nac" type="text" class="form-control" placeholder="campo requerido" >
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="input-icon right">
                                        <label>Telefono:</label>
                                        <input name="telefono" type="text" maxlength="15" class="form-control" placeholder="campo requerido" required>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-3 control-label">Email</label>
                                    <div class="col-xs-6">
                                        <div class="input-icon right">
                                            <i class="fa fa-envelope"></i>
                                            <input id="email" name="email" type="mail" class="form-control" placeholder="campo requerido" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>


                        <br>
                        <label>Inmueble</label>
                        proximamente..
                        {{--
                        <select name="inmueble_id" type="select" maxlength="50" class="form-control" placeholder="campo requerido" required>
                            @foreach($inmuebles as $inmueble)
                                <option value="{{$inmueble->id}}" selected="selected">{{$inmueble->varios datos}}</option>
                            @endforeach
                        </select>
                        --}}

                        <br>

                        </input>
                    </div>
                    <br>

                    <button id="boton_submit_crear" type="submit" class="btn btn-primary hide"></button>
                </form>
                <br>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">volver</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_crear').click()">Registrar inquilino</button>
            </div>
        </div>          
    </div>
</div>