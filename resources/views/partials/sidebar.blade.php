<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>

    <ul class="nav side-menu">
      <li>
        <a href="{{ route('home') }}">Inicio</a>
      </li>
      <li><a> Socios <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('create_socio_path') }}">Ingresar Socio</a></li>
          <li><a href="{{ route('socios_path') }}">Listado Socios</a></li>
        </ul>
      </li>
      <li><a> Gastos <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('create.gasto') }}">Ingresar Gasto</a></li>
          <li><a href="{{ route('gastos.lista') }}">Listado Gastos</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="menu_section">
    <h3>Live On</h3>
  </div>

</div>
<!-- /sidebar menu -->
