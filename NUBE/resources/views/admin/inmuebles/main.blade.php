@extends('admin.partes.index')

@section('title')
Localidades registradas
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Localidades
            <small>registros almacenados</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-suitcase"></i> Generales</a></li>
            <li>Lugares</li>
            <li class="active">Localidades</li>
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
                        <form action="/action_page.php">
                            <div id="wizard">
                                <h2>Datos generales</h2>
                                <section>
                                    <legend>Datos generales</legend>                              
                                    <div class="row">
                                        <div class="box-body">
                                            <div id="map" style="width:auto;height:432px;">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Minimal</label>
                                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option selected="selected">Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-qb39-container"><span class="select2-selection__rendered" id="select2-qb39-container" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Disabled</label>
                                                <select class="form-control select2 select2-hidden-accessible" disabled="" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option selected="selected">Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-ih02-container"><span class="select2-selection__rendered" id="select2-ih02-container" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Multiple</label>
                                                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option>Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Select a State" style="width: 603px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Disabled Result</label>
                                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option selected="selected">Alabama</option>
                                                    <option>Alaska</option>
                                                    <option disabled="disabled">California (disabled)</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-9ymb-container"><span class="select2-selection__rendered" id="select2-9ymb-container" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                        <div id="map" style="width:auto;height:432px;">
                                        </div>
                                    </div>                                   
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
                                    <input type="checkbox" name="registrar_ambientes"> Deseo registrar los ambientes asociados a este inmueble.<br>
                                </section> 
                            </div>
                            <!-- Botones ocultos-->
                            <button type="button" id="boton-modal-crear" class="hide" data-toggle="modal" data-target="#modal-crear"> </button>
                            <input type="submit" class="hide" value="Submit">
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
