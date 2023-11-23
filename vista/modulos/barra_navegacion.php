<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <!-- Botones de navegacion  -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenidoPagina('vista/dashboard.php','content-wrapper')">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenidoPagina('vista/vista-productos.php','content-wrapper')">Productos</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenidoPagina('vista/vista-categorias.php','content-wrapper')">Categorias</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenidoPagina('vista/vista-proveedores.php','content-wrapper')">Proveedores</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Barra de Busqueda -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Vista Pantalla Completa -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->