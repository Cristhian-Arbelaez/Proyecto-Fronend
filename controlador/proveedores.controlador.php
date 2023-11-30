<?php
class ProveedoresControlador
{
    static public function ctrListarProveedores()
    {
        $proveedores = ProveedoresModelo::mdlListarProveedores();
        return $proveedores;
    }

    static public function ctrListarProveedores2()
    {
        $proveedores2 = ProveedoresModelo::mdlListarProveedores2();
        return $proveedores2;
    }

    static public function ctrAgregarProveedor($Nombre)
    {

        $registroproveedor = ProveedoresModelo::mdlAgregarProveedor($Nombre);

        return $registroproveedor;
    }

    static public function ctrActualizarProveedor($table, $data, $id, $nameId)
    {

        $respuesta = ProductosModelo::mdlActualizarInformacion($table, $data, $id, $nameId);

        return $respuesta;
    }

    static public function ctrEliminarProveedor($table, $id, $nameId)
    {
        $respuesta = ProductosModelo::mdlEliminarInformacion($table, $id, $nameId);

        return $respuesta;
    }
}
?>