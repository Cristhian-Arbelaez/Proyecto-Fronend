<?php

require_once "conexion.php";

class CategoriasModelo
{

    static public function mdlListarCategorias()
    {
        $stmt = Conexion::conectar()->prepare("SELECT ID_Categoria, Nombre FROM categoria c order BY Nombre asc");
        $stmt->execute();
        return $stmt->fetchAll();

    }

    static public function mdlListarCategorias2()
    {
        $stmt = Conexion::conectar()->prepare("SELECT '' as detalles, c.ID_Categoria, c.Nombre, c.Fecha, '' as opciones 
                                               FROM categoria c ORDER BY c.ID_Categoria DESC");
        $stmt->execute();
        return $stmt->fetchAll();

    }

    static public function mdlAgregarCategoria($Nombre)
    {
        try {
            $fecha_actual = date('Y-m-d');
            $idcategoria = null;
            $stmt = Conexion::conectar()->prepare("INSERT INTO categoria (ID_Categoria, Nombre, Fecha) 
                VALUES (:ID_Categoria, :Nombre, :Fecha)");

            $stmt->bindParam(":ID_Categoria", $idcategoria, PDO::PARAM_STR);
            $stmt->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);
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

    // static public function mdlActualizarProveedor($ID_Proveedor, $Nombre)
    // {
    //     try {
    //         $idproveedor = $ID_Proveedor;

    //         $stmt = Conexion::conectar()->prepare("UPDATE FROM proveedor SET Nombre = $Nombre WHERE ID_Proveedor = $idproveedor");

    //         $stmt->bindParam(":ID_Proveedor", $idproveedor, PDO::PARAM_STR);
    //         $stmt->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);

    //         if ($stmt->execute()) {
    //             $resultado = 'ok';
    //         } else {
    //             $resultado = 'error';
    //         }
    //     } catch (Exception $e) {
    //         $resultado = 'Execepcion Capturada ' . $e->getMessage() . "\n";
    //     }
    //     return $resultado;
    // }
}



?>