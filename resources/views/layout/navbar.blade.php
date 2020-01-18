


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Promoviles</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">Inicio</a>
      </li>
      <li class="nav-item dropdown {{ Request::is('inventario') ? 'active' : '' }}">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Inventario2 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Reporte de Inventario</a>
          <a class="dropdown-item" href="#">Cargar Inventario</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Productos</a>
        </div>
      </li>

      <li class="nav-item dropdown {{ Request::is('usuarios') ? 'active' : '' }}">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/usuarios">Lista de Usuarios</a>
          <a class="dropdown-item" href="#">Nuevo Usuario</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Productos</a>
        </div>
      </li>


      <li class="nav-item dropdown {{ Request::is('sucursales') ? 'active' : '' }}">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sucursales
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/sucursales">Lista de Sucursales</a>
          <a class="dropdown-item" href="#">Nuevo Sucursal</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Productos</a>
        </div>
      </li>


    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
