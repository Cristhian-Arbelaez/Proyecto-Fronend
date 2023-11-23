<?php
require_once "../controlador/proveedores.controlador.php";
require_once "../modelo/proveedores.modelo.php";
class AjaxProveedores
{
    public $Nombre;
    public $Id_Proveedor;


    public function ajaxListarProveedores()
    {
        $proveedores = ProveedoresControlador::ctrListarProveedores();

        echo json_encode($proveedores, JSON_UNESCAPED_UNICODE);
    }


    public function ajaxListarProveedores2()
    {
        $proveedores2 = ProveedoresControlador::ctrListarProveedores2();

        echo json_encode($proveedores2);
    }


    public function ajaxAgregarProveedor()
    {

        $proveedor = ProveedoresControlador::ctrAgregarProveedor($this->Nombre);

        echo json_encode($proveedor);
    }


    public function ajaxActualizarProveedor()
    {

        $proveedor2 = ProveedoresControlador::ctrActualizarProveedor($this->Id_Proveedor, $this->Nombre);

        echo json_encode($proveedor2);
    }

}


if (isset($_POST["accion"]) && $_POST["accion"] == "4") {
    $proveedores2 = new AjaxProveedores();
    $proveedores2->ajaxListarProveedores2();

} else if (isset($_POST["accion"]) && $_POST["accion"] == "5") {
    $agregarProveedor = new AjaxProveedores();
    $agregarProveedor->Nombre = $_POST["Nombre"];
    $agregarProveedor->ajaxAgregarProveedor();

} else if (isset($_POST["accion"]) && $_POST["accion"] == "6") {
    $actualizarProveedor = new AjaxProveedores();
    $actualizarProveedor->Id_Proveedor = $_POST["ID_Proveedor"];
    $actualizarProveedor->Nombre = $_POST["Nombre"];
    $actualizarProveedor->ajaxActualizarProveedor();

} else {
    $proveedores = new AjaxProveedores();
    $proveedores->ajaxListarProveedores();
}
?>