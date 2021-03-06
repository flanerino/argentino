﻿<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>

    <ul class="nav side-menu">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
      </li>
      <li><a><i class="fa fa-user" aria-hidden="true"></i> Socios <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('create_socio_path') }}">Ingresar Socio </a></li>
          <li><a href="{{ route('socios_path') }}">Listado Socios </a></li>
          <li><a href="{{ route('socios_historicos_path') }}">Listado Socios Hist&oacute;ricos </a></li>
        </ul>
      </li>
	  <li><a><i class="fa fa-usd" aria-hidden="true"></i> Cuotas <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('create_cuota_path') }}">Ingresar Cuota Personalizada</a></li>
          <li><a href="{{ route('cuotas_path') }}">Listado Cuotas</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-usd" aria-hidden="true"></i> Gastos <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('create.gasto') }}">Ingresar Gasto</a></li>
          <li><a href="{{ route('gastos.lista') }}">Listado Gastos</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-usd" aria-hidden="true"></i> Ingresos <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('create.ingreso') }}">Registrar Ingreso</a></li>
          <li><a href="{{ route('ingresos.lista') }}">Listado Ingresos</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-futbol-o" aria-hidden="true"></i> Deportes <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('create.deporte') }}">Ingresar Deporte</a></li>
          <li><a href="{{ route('deportes.lista') }}">Listado Deportes</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="menu_section">

  </div>

</div>
<!-- /sidebar menu -->
