<?php
require_once "conexion.php";
class ProductosModelo
{
    static public function mdlListarProductos()
    {

        $stmt = Conexion::conectar()->prepare("SELECT '' as detalles, p.ID_Producto, p.Nombre, p.Precio, p.ID_Categoria, c.Nombre as Nombre_Categoria, p.ID_Proveedor, pro.Nombre as Nombre_Proveedor, p.Fecha, '' as opciones 
FROM producto p INNER JOIN categoria c on p.ID_Categoria = c.ID_Categoria INNER JOIN proveedor pro on p.ID_Proveedor = pro.ID_Proveedor AND p.Precio > 0 ORDER BY p.ID_Producto DESC; EN");

        $stmt->execute();

        return $stmt->fetchAll();

    }

    static public function mdlAgregarProducto($Nombre, $Precio, $ID_Provedor, $ID_Categoria)
    {
        try {
            $fecha_actual = date('Y-m-d');
            $idproducto = null;
            $stmt = Conexion::conectar()->prepare("INSERT INTO producto (ID_Producto, Nombre, Precio, ID_Proveedor, ID_Categoria,  Fecha) 
                VALUES (:ID_Producto, :Nombre, :Precio, :ID_Proveedor, :ID_Categoria, :Fecha)");

            $stmt->bindParam(":ID_Producto", $idproducto, PDO::PARAM_STR);
            $stmt->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);
            $stmt->bindParam(":Precio", $Precio, PDO::PARAM_STR);
            $stmt->bindParam(":ID_Proveedor", $ID_Provedor, PDO::PARAM_STR);
            $stmt->bindParam(":ID_Categoria", $ID_Categoria, PDO::PARAM_STR);
            $stmt->bindParam(":Fecha", $fecha_actual, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $resultado = 'ok';
            } else {
                $resultado = 'error';
            }
        } catch (Exception $e) {
            $resultado = 'Execepcion Capturada ' . $e->getMessage() . "\n";
        }
        return $resultado;
    }

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