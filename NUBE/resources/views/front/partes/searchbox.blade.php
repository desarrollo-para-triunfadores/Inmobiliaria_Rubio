<div class="search-box-wrapper">
    <div class="search-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-9 col-sm-4 col-sm-offset-8">
                    <div class="search-box map">
                        <form role="form" id="form-map" class="form-map form-search">
                            <h2>Busque su Propiedad</h2>
                            {{--
                            <div class="form-group">
                                <input type="text" class="form-control" id="search-box-property-id" placeholder="Property ID">
                            </div>
                            --}}
                            <div class="form-group">
                                <select name="type">
                                    <option value="">Condición</option>
                                    <option value="1">Alquiler</option>
                                    <option value="2">Venta</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="country">
                                    <option value="">Pais</option>
                                    <option value="1">Argentina</option>
                                    <option value="2">Paraguay</option>
                                    <option value="3">Brasil</option>
                                    <option value="4">Uruguay</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="city">
                                    <option value="">Ciudad</option>
                                    <option value="1">Resistencia</option>
                                    <option value="2">Corrientes</option>
                                    <option value="3">Sáenz Peña</option>
                                    <option value="4">Fontana</option>
                                    <option value="5">Barranqueras</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="district">
                                    <option value="">Barrio</option>
                                    <option value="1">Centro</option>
                                    <option value="2">Güiraldes</option>
                                    <option value="3">Villa del Carmen</option>
                                    <option value="4">España</option>
                                    <option value="5">Aeroparque</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="property-type">
                                    <option value="">Tipo de Propiedad</option>
                                    <option value="1">Departamento</option>
                                    <option value="2">Condominio</option>
                                    <option value="3">Cabaña</option>
                                    <option value="4">Terreno Plano</option>
                                    <option value="5">Casa</option>
                                </select>
                            </div>
                            {{--
                            <div class="form-group">
                                <div class="price-range">
                                    <input id="price-input" type="text" name="price" value="1000;299000">
                                </div>
                            </div>
                            --}}
                            <div class="form-group">
                                <select name="price-type">
                                    <option value="">$450.000 +</option>
                                    <option value="1">$500.000 +</option>
                                    <option value="2">$600.000 +</option>
                                    <option value="3">$700.000 +</option>
                                    <option value="4">$800.000 +</option>
                                    <option value="5">$1100.000 +</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Buscar Ahora</button>
                            </div><!-- /.form-group -->
                        </form><!-- /#form-map -->
                    </div><!-- /.search-box.map -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.search-box-inner -->
</div>