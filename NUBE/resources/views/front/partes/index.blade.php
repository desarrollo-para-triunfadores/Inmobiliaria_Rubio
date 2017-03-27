<!DOCTYPE html>
<head>
    @include('front.partes.estilos')
</head>

<body class="page-homepage navigation-fixed-top page-slider page-slider-search-box" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
    <div class="wrapper">
        <!-- Navbar y Navigation -->
        @include('front.partes.navbar')
        <!-- Slider -->
        @include('front.partes.slider')

        <!-- Search Box -->

        @include('front.partes.searchbox')


        <!-- Espacio para contenido propio de cada seccion -->
        @include('front.inicio.contenido')

        <!-- Page Footer -->
        @include('front.partes.pie')
    </div>
    <div id="overlay"></div>
    @include('front.partes.scripts')
</body>
</html>