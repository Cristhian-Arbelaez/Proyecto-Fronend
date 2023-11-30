<?php
class CategoriasControlador
{
    static public function ctrListarCategorias()
    {
        $categorias = CategoriasModelo::mdlListarCategorias();
        return $categorias;
    }

    static public function ctrListarCategorias2()
    {
        $categorias2 = CategoriasModelo::mdlListarCategorias2();
        return $categorias2;
    }

    static public function ctrAgregarCategorias($Nombre)
    {
        $registrocategoria = CategoriasModelo::mdlAgregarCategoria($Nombre);
        return $registrocategoria;
    }

    static public function ctrActualizarCategoria($table, $data, $id, $nameId)
    {

        $respuesta = ProductosModelo::mdlActualizarInformacion($table, $data, $id, $nameId);

        return $respuesta;
    }

    static public function ctrEliminarCategoria($table, $id, $nameId)
    {
        $respuesta = ProductosModelo::mdlEliminarInformacion($table, $id, $nameId);

        return $respuesta;
    }
}
?>