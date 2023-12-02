<?php
require_once "conexion.php";
class EditarEliminarModelo{
    static public function mdlActualizarInformacion($table, $data, $id, $nameId)
    {

        $set = "";

        foreach ($data as $key => $value) {

            $set .= $key . " = :" . $key . ",";

        }

        $set = substr($set, 0, -1);

        $stmt = Conexion::conectar()->prepare("UPDATE $table SET $set WHERE $nameId = :$nameId");

        foreach ($data as $key => $value) {

            $stmt->bindParam(":" . $key, $data[$key], PDO::PARAM_STR);

        }

        $stmt->bindParam(":" . $nameId, $id, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";

        } else {

            return Conexion::conectar()->errorInfo();

        }
    }

    static public function mdlEliminarInformacion($table, $id, $nameId)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $table WHERE $nameId = :$nameId");

        $stmt->bindParam(":" . $nameId, $id, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
            ;

        } else {

            return Conexion::conectar()->errorInfo();

        }

    }
}
?>