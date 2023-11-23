<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="vista/css/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2"
      style="opacity: .8">
    <span>Productos</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Menu Lateral -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link active"
            onclick="CargarContenidoPagina('vista/dashboard.php','content-wrapper')">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Inicio
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link"
            onclick="CargarContenidoPagina('vista/vista-productos.php','content-wrapper')">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Productos
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link"
            onclick="CargarContenidoPagina('vista/vista-categorias.php','content-wrapper')">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Categorias
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a style="cursor: pointer;" class="nav-link"
            onclick="CargarContenidoPagina('vista/vista-proveedores.php','content-wrapper')">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Proveedores
            </p>
          </a>
        </li>
      </ul>
      </li>
      </ul>
    </nav>
  </div>
</aside>

<script>
  $(".nav-link").on('click', function () {
    $(".nav-link").removeClass('active');
    $(this).addClass('active');
  })
</script>