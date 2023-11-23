<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Inicio</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <!--<li class="breadcrumb-item active">Starter Page</li>-->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

      <!-- Fila Totales-->
        <div class="row">
            <div class="col-lg-4">
                <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">

                  <h2>Total de Productos</h2>
                  <h3 id="total_productos">?</h3>

                </div>
                <div class="icon">
                  <i class="ion ion-beer"></i>
                </div>
                <a style="cursor:pointer;" class="small-box-footer" onclick="CargarContenidoPagina('vista/vista-productos.php','content-wrapper')">Más Información <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4">
                <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">

                  <h2>Total de Categorías</h2>
                  <h3 id="total_categorias">?</h3>

                </div>
                <div class="icon">
                  <i class="ion ion-compose"></i>
                </div>
                <a style="cursor:pointer;" class="small-box-footer" onclick="CargarContenidoPagina('vista/vista-categorias.php','content-wrapper')">Más Información <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4">
                <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">

                  <h2>Total de Proveedores</h2>
                  <h3 id="total_proveedores">?</h3>

                </div>
                <div class="icon">
                  <i class="ion ion-person-stalker"></i>
                </div>
                <a style="cursor:pointer;" class="small-box-footer" onclick="CargarContenidoPagina('vista/vista-proveedores.php','content-wrapper')">Más Información <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <script>
      $(document).ready(function(){

        $.ajax({
          url: "ajax/dashboard.ajax.php",
          method: 'POST',
          dataType: 'json',
          success:function(respuesta){
            console.log("respuesta",respuesta);
            $("#total_productos").html(respuesta[0]['total_productos']);
            $("#total_categorias").html(respuesta[0]['total_categorias']);
            $("#total_proveedores").html(respuesta[0]['total_proveedores']);
          }
        });

      })

      setInterval(() => {
        $.ajax({
          url: "ajax/dashboard.ajax.php",
          method: 'POST',
          dataType: 'json',
          success:function(respuesta){
            console.log("respuesta",respuesta);
            $("#total_productos").html(respuesta[0]['total_productos']);
            $("#total_categorias").html(respuesta[0]['total_categorias']);
            $("#total_proveedores").html(respuesta[0]['total_proveedores']);
          }
        });
      },10000);
    </script>