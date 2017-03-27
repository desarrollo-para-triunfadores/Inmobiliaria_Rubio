

<div id="page-content">
    <!--
    <section id="banner">
        <div class="block has-dark-background background-color-default-darker center text-banner">
            <div class="container">
                <h1 class="no-bottom-margin no-border">Zoner Is Fully Loaded Real Estate Template with <a href="#" class="text-underline">Tons of Features</a>!</h1>
            </div>
        </div>
    </section><!-- /#banner
    -->

    {{-- @include('front.partes.nuestrosServicios') --}}

    <section id="price-drop" class="block">
        <div class="container">
            <header class="section-title">
                <h2>Consultar</h2>
                <a href="{{ view('front.listado.index') }}" class="link-arrow">Todas las Propiedades</a>
            </header>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="property">
                        <a href="{{ route('detalle.index') }}">
                            <div class="property-image">
                                <img alt="" src="{{ asset('plantillas/zoner/assets/img/properties/1.jpg') }}" >
                            </div>
                            <div class="overlay">
                                <div class="info">
                                    <div class="tag price">$ 11,000</div>
                                    <h3>Monteagudo 695</h3>
                                    <figure>Resistencia, Chaco, Argentina</figure>
                                </div>
                                <ul class="additional-info">
                                    <li>
                                        <header>Superficie:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Habitaciones:</header>
                                        <figure>2</figure>
                                    </li>
                                    <li>
                                        <header>Baños:</header>
                                        <figure>2</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>0</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="property">
                        <a href="{{ route('detalle.index') }}">
                            <div class="property-image">
                                <img alt="" src="{{ asset('plantillas/zoner/assets/img/properties/2.jpg')}}">
                            </div>
                            <div class="overlay">
                                <div class="info">
                                    <div class="tag price">$ 38,000</div>
                                    <h3>San Juan 1800</h3>
                                    <figure>Paso de la Patria, Corrientes, Argentina</figure>
                                </div>
                                <ul class="additional-info">
                                    <li>
                                        <header>Superficie:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Habitaciones:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baños:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="property">
                        <a href="{{ route('detalle.index') }}">
                            <div class="property-image">
                                <img alt="" src="{{ asset('plantillas/zoner/assets/img/properties/3.jpg')}}">
                            </div>
                            <div class="overlay">
                                <div class="info">
                                    <div class="tag price">$ 325,000</div>
                                    <h3>Donovan 435</h3>
                                    <figure>Resistencia, Chaco, Argentina</figure>
                                </div>
                                <ul class="additional-info">
                                    <li>
                                        <header>Superficie:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Habitaciones:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baños:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="property">
                        <a href="{{ route('detalle.index') }}">
                            <div class="property-image">
                                <img alt="" src="{{ asset('plantillas/zoner/assets/img/properties/4.jpg')}}">
                            </div>
                            <div class="overlay">
                                <div class="info">
                                    <div class="tag price">$ 16,000</div>
                                    <h3>Barrio La California</h3>
                                    <figure>Resistencia, Chaco, Argentina</figure>
                                </div>
                                <ul class="additional-info">
                                    <li>
                                        <header>Superficie:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Habitaciones:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baños:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row-->
        </div><!-- /.container -->
    </section><!-- /#price-drop -->
    <aside id="advertising" class="block">
        <div class="container">
            <a href="{{ route('contacto.index') }}">
                <div class="banner">
                    <div class="wrapper">
                        <span class="title">Te gustaria que tu propiedad aparezca acá?</span>
                        <span class="submit">Registrala ahora! <i class="fa fa-plus-square"></i></span>
                    </div>
                </div><!-- /.banner-->
            </a>
        </div>
    </aside><!-- /#adveritsing-->

    {{-- @include('front.partes.nuevas') --}}


    {{-- @include('front.partes.testimonials') --}}}
    @include('front.partes.partners')
</div>
