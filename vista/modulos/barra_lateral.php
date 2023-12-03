<?php
$menuUsuario = UsuarioControlador::ctrObtenerMenuUsuario($_SESSION["usuario"]->id_usuario);
?>


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <div class="brand-link">
    <div class="image">
      <img src="vista/css/dist/img/usuario.png" alt="User Image" class="brand-image img-circle elevation-3">
    </div>
    <div class="info">
      <h5 class="brand-text"><?php if(isset($_COOKIE['Usuario'])){
        echo $_COOKIE['Usuario'];
      }?>
    </div>
  </div>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Menu Lateral -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <?php foreach ($menuUsuario as $menu): ?>
          <li class="nav-item">
            <a style="cursor: pointer;" 
               class="nav-link 
                <?php if ($menu->vista_inicio == 1) : ?>
                  <?php echo 'active'?>
                <?php endif;?>"
            <?php if(!empty($menu->vista)) :?>
              onclick="CargarContenidoPagina('vista/<?php echo $menu->vista;?>','content-wrapper')"
            <?php endif; ?>>
              <i class="nav-icon <?php echo $menu->icon_menu; ?>"></i>
              <p>
                <?php echo $menu->modulo ?>
              </p>
            </a>
          </li>
        <?php endforeach; ?>

        <li class="nav-item">
          <a href="http://localhost/Proyecto-Fronend?cerrar_sesion=1" class="nav-link">
            <i class="nav-icon fas fa-window-close"></i>
            <p>
              Cerrar Sesión
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