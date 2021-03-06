<div class="navigation">
    @include('front.partes.cabecera')
    <div class="container">
        <header class="navbar" id="top" role="banner">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar">346346</span>
                    <span class="icon-bar">636345666</span>
                    <span class="icon-bar">Inmobiliaria NUBE</span>
                </button>
                <div class="navbar-brand nav" id="brand">
                    <a href="">Inmobiliaria NUBE</a>
                </div>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="has-child"><a href="#">Propiedades</a>
                        <ul class="child-navigation">
                            <li><a href="{{ route('inmueble.index') }}">Detalle de Propiedad</a></li>
                            <!-- <li><a href="properties-listing.html">Ver todas las Propiedades</a></li> -->
                            <!-- <li><a href="properties-listing-grid.html">Listado por ubicación</a></li> -->
                            <!-- <li><a href="properties-listing-lines.html">Listado de Inmuebles</a></li> -->
                        </ul>
                    </li>
                    <li class="has-child"><a href="#">Paginas</a>
                        <ul class="child-navigation">
                            <li><a href="about-us.html">Quienes somos?</a></li>
                            <li><a href="agent-detail.html">Detalles del Agente</a></li>
                            <li><a href="my-properties.html">Mis Propiedades</a></li>
                            <li><a href="bookmarked.html">Propiedades Marcadas</a></li>
                            <li><a href="create-account.html">Crear Cuenta</a></li>
                            <li><a href="{{ url('/login') }}">Ingresar</a></li>
                            <li class="has-child"><a href="#">Error Pages</a>
                                <ul class="child-navigation">
                                    <li><a href="403.html">403</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="500.html">500</a></li>
                                </ul>
                            </li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="terms-conditions.html">Terminos y Condiciones</a></li>
                        </ul>
                    </li>
                    <li class="has-child"><a href="#">Agentes y Agencias</a>
                        <ul class="child-navigation">
                            <li><a href="agents-listing.html">Lista de Agentes</a></li>
                            <li><a href="agencies-listing.html">Listado de  Agencias</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('contacto.index') }}">Publica tu propiedad</a></li>

                    <li><a href="contact.html">Contacto</a></li>
                </ul>
            </nav><!-- /.navbar collapse-->
            <div class="add-your-property">
                <a href="submit.html" class="btn btn-default"><i class="fa fa-plus"></i><span class="text">Añade tu Propiedad</span></a>
            </div>
        </header><!-- /.navbar -->
    </div><!-- /.container -->
</div><!-- /.navigation -->