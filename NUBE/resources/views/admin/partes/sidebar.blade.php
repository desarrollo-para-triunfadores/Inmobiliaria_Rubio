<section class="sidebar">

    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
    </form>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="active treeview">
            <a href="#">
                <i class="fa fa-user"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="{{ route('usuarios.index') }}"><i class="fa fa-circle-o"></i> Administrar Usuarios</a></li>
                <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i> Roles de Usuarios</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Parametros Generales</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right">{{-- 4 --}}</span>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Tipos de Inmuebles</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Caracteristicas de Inmuebles</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Materiales</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-map-marker"></i>
                <span>Locaciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('paises.index') }}"><i class="fa fa-circle-o"></i> Paises</a></li>
                <li><a href="{{ route('provincias.index') }}"><i class="fa fa-circle-o"></i> Provincias</a></li>
                <li><a href="{{ route('localidades.index') }}"><i class="fa fa-circle-o"></i> Localidades</a></li>
                <li><a href="{{ route('barrios.index') }}"><i class="fa fa-circle-o"></i> Barrios</a></li>
                <li><a href="{{ route('edificios.index') }}"><i class="fa fa-circle-o"></i> Edificios</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-map-marker"></i>
                <span>Inmuebles (Pendiente)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">

            </ul>
        </li>

        <!--
        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
            </ul>
        </li>
        -->

        <!--
        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
            </ul>
        </li>
        -->


        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Otros</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
</section>