<div class="modal fade" id="modal-crear">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Agregar característica</h4>
            </div>
            <div class="modal-body">
                <h3>Detalles del registro</h3>
                <br>
                <div class="form-group">                        
                    <label>Característica:</label>
                    <select style="width: 100%" id="combo" placeholder="campo requerido"  class="select2 form-control" multiple>
                        @foreach($tipos as $tipo)  
                        @if ($tipo->caracteristicas->count()>0)
                        <optgroup label="{{$tipo->nombre}}:">
                            @foreach($caracteristicas as $caracteristica)
                            @if ($caracteristica->tipo->id === $tipo->id)
                            <option value="{{$caracteristica}}">{{$caracteristica->nombre}}</option>
                            @endif
                            @endforeach
                        </optgroup>
                        @endif
                        @endforeach
                    </select>
                </div>               
                <br>      
            </div>
            <div class="modal-footer">
                <button type="button" id="boton_cerrar_crear" class="btn btn-default pull-left" data-dismiss="modal">volver</button>
                <button type="button" class="btn btn-primary" onclick="agregar_característica()">Agregar característica</button>
            </div>
        </div>          
    </div>
</div>