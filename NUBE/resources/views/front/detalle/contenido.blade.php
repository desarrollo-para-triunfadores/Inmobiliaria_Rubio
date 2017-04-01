

<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Detalles del Inmueble</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <div class="row">
            <!-- Property Detail Content -->
            <div class="col-md-9 col-sm-9">
                <section id="property-detail">
                    <header class="property-title">
                        <h1>Monteagudo 695</h1>
                        <figure>Condominio del Este, Resistencia</figure>
                            <span class="actions">

                    </header>
                    <section id="property-gallery">
                        <div class="owl-carousel property-carousel">
                            <div class="property-slide">
                                <a href="{{asset('plantillas/zoner/assets/img/properties/950x480/1.jpg')}}" class="image-popup">
                                    <div class="overlay"><h3>Vista Frontal</h3></div>
                                    <img alt="" src="{{asset('plantillas/zoner/assets/img/properties/950x480/1.jpg')}}" >
                                </a>
                            </div>
                            <div class="property-slide">
                                <a href="{{asset('plantillas/zoner/assets/img/properties/950x480/2.jpg')}}" class="image-popup">
                                    <div class="overlay"><h3>Habitacion</h3></div>
                                    <img alt="" src="{{asset('plantillas/zoner/assets/img/properties/950x480/2.jpg')}}" >
                                </a>
                            </div>
                            <div class="property-slide">
                                <a href="{{asset('plantillas/zoner/assets/img/properties/950x480/3.jpg')}}" class="image-popup">
                                    <div class="overlay"><h3>Baño</h3></div>
                                    <img alt="" src="{{asset('plantillas/zoner/assets/img/properties/950x480/3.jpg')}}">
                                </a>
                            </div>
                            <div class="property-slide">
                                <a href="{{asset('plantillas/zoner/assets/img/properties/950x480/4.jpg')}}" class="image-popup">
                                    <div class="overlay"><h3>Baño</h3></div>
                                    <img alt="" src="{{asset('plantillas/zoner/assets/img/properties/950x480/4.jpg')}}">
                                </a>
                            </div>
                            <div class="property-slide">
                                <a href="{{asset('plantillas/zoner/assets/img/properties/950x480/5.jpg')}}" class="image-popup">
                                    <div class="overlay"><h3>Baño</h3></div>
                                    <img alt="" src="{{asset('plantillas/zoner/assets/img/properties/950x480/5.jpg')}}">
                                </a>
                            </div>
                        </div><!-- /.property-carousel -->
                    </section>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            @include('front.detalle.especificaciones')
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-12">
                            <section id="description">
                                <header><h2>Descripcion del Inmueble</h2></header>
                                <p>
                                    Si quiere vender o alquilar una casa resulta clave publicitarla correctamente en el lugar idóneo, siendo internet el mejor escaparate, y a través de un anuncio efectivo. En los diferentes portales inmobiliarios se pueden ver cientos de miles de anuncios de inmuebles, pero hay algunos que levantan más curiosidad que otros.
                                    El primer paso para comercializar rápidamente una vivienda pasa por utilizar webs con credibilidad y prestigio que funcionen correctamente, pero esto no es todo.
                                </p>
                                <p>
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                    himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis
                                    lorem, suscipit ac nisl ac, iaculis dapibus tellus.
                                </p>
                            </section><!-- /#description -->
                            <section id="property-features">
                                <header><h2>Ambientes</h2></header>
                                <ul class="list-unstyled property-features-list">
                                    <li>Cuarto de lavado</li>
                                    <li>Pileta</li>
                                    <li>Terraza</li>
                                    <li>4 Habitaciones</li>
                                    <li>Garage para 2 coches</li>
                                    <li>Cuarto Familiar</li>
                                    <li>Piso de Parquet</li>
                                </ul>
                            </section><!-- /#property-features -->
                            <section id="floor-plans">
                                <div class="floor-plans">
                                    <header><h2>Planos</h2></header>
                                    <a href="{{asset('plantillas/zoner/assets/img/properties/floor-plan-big.jpg')}}" class="image-popup"><img alt="" src="{{asset('plantillas/zoner/assets/img/properties/floor-plan-01.jpg')}}"></a>
                                    <a href="{{asset('plantillas/zoner/assets/img/properties/floor-plan-big.jpg')}}" class="image-popup"><img alt="" src="{{asset('plantillas/zoner/assets/img/properties/floor-plan-02.jpg')}}"></a>
                                </div>
                            </section>


                            @include('front.detalle.mapa')
                            {{--
                                @include('front.detalle.estrellas')
                            --}}

                            <!-- /#video-presentation -->
                            @include('front.detalle.video')
                            {{--

                            --}}
                        </div><!-- /.col-md-8 -->

                        @include('front.detalle.agenteVentas')
                    </div><!-- /.row -->
                </section><!-- /#property-detail -->
            </div><!-- /.col-md-9 -->
            <!-- end Property Detail Content -->

            <!-- sidebar -->

            <!-- end Sidebar -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>