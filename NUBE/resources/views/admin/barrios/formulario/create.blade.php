<div class="modal fade" id="modal-crear">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Registrar Barrio</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form action="/admin/barrios" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">                                                           
                    <h3>Detalles del registro</h3>
                    <br>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                        <br>
                        <label>Barrio</label>
                        <select name="localidad_id" type="select" maxlength="50" class="form-control" placeholder="campo requerido" required>
                            @foreach($localidades as $localidad)
                                <option value="{{$localidad->id}}" selected="selected">{{$localidad->nombre}}</option>
                            @endforeach
                        </select>
                        <br>
                        <label>Es PRIVADO??</label>
                        <input name="privado" type="checkbox" class="checkbox">

                        </input>
                    </div>
                    <br>

                    <button id="boton_submit_crear" type="submit" class="btn btn-primary hide"></button>
                </form>
                <br>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">volver</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_crear').click()">Registrar Barrio</button>
            </div>
        </div>          
    </div>
</div>