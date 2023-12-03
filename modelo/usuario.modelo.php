<?php

require_once "conexion.php";

class UsuarioModelo
{
    static public function mdlIniciarSesion($usuario, $contrasena)
    {
        $stml = Conexion::conectar()->prepare("select * from usuarios u inner join perfiles p on u.id_perfil_usuario = p.id_perfil 
                                                inner join perfil_modulo pm on pm.id_perfil = u.id_perfil_usuario
                                                inner join modulos m on m.id = pm.id_modulo 
                                                where u.usuario = :usuario and u.clave = :contrasena and vista_inicio = 1");

        $stml->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $stml->bindParam(":contrasena", $contrasena, PDO::PARAM_STR);

        $stml -> execute();

        return $stml -> fetchAll(PDO::FETCH_CLASS);
    }

    static public function mdlObtenerMenuUsuario($id_usuario){
        $stml = Conexion::conectar()->prepare("SELECT m.id, m.modulo, m.icon_menu, m.vista, pm.vista_inicio
                                                from usuarios u inner join perfiles p on u.id_perfil_usuario = p.id_perfil
                                                                inner join perfil_modulo pm on pm.id_perfil = p.id_perfil
                                                                inner join modulos m on m.id = pm.id_modulo
                                                                where u.id_usuario = :id_usuario and m.padre_id is null order by m.id;");

        $stml->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);
        $stml->execute();

        return $stml-> fetchAll(PDO::FETCH_CLASS);
    }
}
?>

