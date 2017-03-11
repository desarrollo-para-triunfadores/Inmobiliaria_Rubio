<!DOCTYPE html>

<head>
  @include('admin.partes.meta')
  @include('admin.partes.estilos')
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <!-- top navigation -->

              <!-- page content -->

        <div class="left_col scroll-view">
          <!-- sidebar menu -->

          <!-- /menu footer buttons -->
          @include('admin.partes.menuFooter')
        </div>
    </div>
        <!-- footer content -->
  </div>
      <!-- /page content -->


  @include('admin.partes.scripts')
  @yield('script')
</body>
</html>
