@extends('admin.partes.index')
<head>
  @include('admin.partes.meta')
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      @include('admin.partes.topNav')
      @include('admin.partes.sidebar')

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3> Paises </h3>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Buscar...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Buscar</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Paises Registrados</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <p class="text-muted font-13 m-b-30">

                  </p>
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($paises as $pais)
                      <tr>
                        <td>  {{ $pais->id }}</td>
                        <td>  {{ $pais->nombre }}</td>
                        <td class="text-center">
                          <a data-toggle="tooltip" data-placement="top" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="" class="btn btn-info"> <span class="fa fa-eye" aria-hidden="true"></span></a>
                        </td>
                      </tr>
                    @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            <!-- /page content -->
    </div>

</div>
  @include('admin.partes.footer')
</body>
</html>
