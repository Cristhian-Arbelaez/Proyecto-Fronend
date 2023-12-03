<?php

class UsuarioControlador{
    public function login(){
        if(isset($_POST["Usuario"])){

            $usuario = $_POST["Usuario"];
            $contrasena = $_POST["Contrasena"];
            $respuesta = UsuarioModelo::mdlIniciarSesion($usuario, $contrasena);

            if(count($respuesta) > 0){

                $_SESSION["usuario"] = $respuesta[0];

                echo '
                    <script>
                        window.location = "http://localhost/Proyecto-Fronend/"
                    </script>';

            }else{

                echo '
                    <script>
                        fncSweetAlert("error", "Usuario y/o Contraseña Invalidos", "http://localhost/Proyecto-Fronend/");
                    </script>';

            }

        }
    }

    static public function ctrObtenerMenuUsuario($id_usuario){
        $menuUsuario = UsuarioModelo::mdlObtenerMenuUsuario($id_usuario);
        return $menuUsuario;
    }
    
}
?>