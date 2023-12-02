<?php
class ProductosControlador
{
    static public function ctrListarProductos()
    {

        $productos = ProductosModelo::mdlListarProductos();

        return $productos;
    }

    static public function ctrAgregarProducto($Nombre, $Precio, $ID_Proveedor, $ID_Categoria)
    {

        $registroproducto = ProductosModelo::mdlAgregarProducto($Nombre, $Precio, $ID_Proveedor, $ID_Categoria);

        return $registroproducto;
    }

    static public function ctrActualizarProducto($table, $data, $id, $nameId)
    {

        $respuesta = EditarEliminarModelo::mdlActualizarInformacion($table, $data, $id, $nameId);

        return $respuesta;
    }

    static public function ctrEliminarProducto($table, $id, $nameId)
    {
        $respuesta = EditarEliminarModelo::mdlEliminarInformacion($table, $id, $nameId);

        return $respuesta;
    }


}
?>