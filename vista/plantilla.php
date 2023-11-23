<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A.P. | Listas de Compras</title>

  <link rel="shortcut icon" href="vista/css/dist/img/AdminLTELogo.png" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vista/css/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/css/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="vista/css/dist/css/plantilla.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="vista/css/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <link rel="stylesheet" href="vista/css/dist/css/toastr.min.css">


  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- ============================================================
    =ESTILOS PARA USO DE DATATABLES JS
    ===============================================================-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">


  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="vista/css/plugins/jquery/jquery.min.js"></script>  
  <!-- Bootstrap 4 -->
  <script src="vista/css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>  
  <!-- ChartJS -->
  <script src="vista/css/plugins/chart.js/Chart.min.js"></script>

   <!-- SweetAlert2 -->
   <script src="vista/css/plugins/sweetalert2/sweetalert2.min.js"></script>
   
   <script src="vista/css/dist/js/toastr.min.js"></script>
  

  <!--JS Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- ============================================================
    =LIBRERIAS PARA USO DE DATATABLES JS
    ===============================================================-->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>        
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>


    <!-- ============================================================
    =LIBRERIAS PARA EXPORTAR A ARCHIVOS
    ===============================================================-->
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>

    
  <!-- AdminLTE App -->
  <script src="vista/css/dist/js/adminlte.min.js"></script>
  

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php
        include "modulos/barra_navegacion.php";
        include "modulos/barra_lateral.php";
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
        include "vista/dashboard.php";
    ?>
  </div>
  <!-- /.content-wrapper -->

    <?php
        include "vista/modulos/pie_de_página.php";
    ?>
</div>
<!-- ./wrapper -->

    <script>
        function CargarContenidoPagina(pagina_php, contenedor){
            $("." + contenedor).load(pagina_php);
        }
    </script>

</body>
</html>
