<?php 
    if (isset($_POST['Enviar'])){
        $cookieUsuario = htmlentities($_POST['Usuario']);

        setcookie('Usuario', $cookieUsuario, time()+3600);

    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A.P. | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vista/css/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="vista/css/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vista/css/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h2 class="h2"><b>A.P. Inventario De Productos</b></h2>
            </div>
        </div>

        <div class="card-body">

                <form method="post" class="needs-validation-login" novalidate>

                    <!-- USUARIO DEL SISTEMA -->
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Ingrese Su Usuario" name="Usuario" required>
                        <div class="invalid-feedback">Debe Ingresar Su Usuario!</div>
                    </div><!-- /.input-group USUARIO -->

                    <!-- PASSWORD DEL USUARIO DEL SISTEMA -->
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <input type="password" class="form-control" placeholder="Ingrese Su Contraseña" name="Contrasena" required>
                        <div class="invalid-feedback">Debe Ingresar Su Contraseña!</div>
                    </div><!-- /.input-group PASSWORD -->

                    <div class="row">
                        <?php
                            $login = new UsuarioControlador();
                            $login -> login();
                        ?>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-info" name="Enviar">Iniciar Sesión</button>
                        </div>

                    </div>
                </form>
            </div>
    </div>

    <!-- jQuery -->
    <script src="vista/css/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="vista/css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="vista/css/dist/js/adminlte.min.js"></script>
</body>

</html>