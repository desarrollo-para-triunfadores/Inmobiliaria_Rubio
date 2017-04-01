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
                <form action="/admin/localidades" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">                                                           
                    <h3>Detalles del registro</h3>
                    <br>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                        <label>Apellido:</label>
                        <input name="apellido" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                        <input name="dni" type="text" maxlength="8" class="form-control" placeholder="campo requerido" required>
                        <input name="fecha_nac" type="date" maxlength="8" class="form-control" placeholder="campo requerido" required>
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
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_crear').click()">registrar localidad</button>
            </div>
        </div>          
    </div>
</div>