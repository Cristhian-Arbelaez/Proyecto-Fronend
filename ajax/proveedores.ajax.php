<?php
require_once "../controlador/proveedores.controlador.php";
require_once "../modelo/proveedores.modelo.php";
require_once "../modelo/productos.modelo.php";
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

    public function ajaxActualizarProveedor($data)
    {

        $table = "proveedor";
        $id = $_POST["ID_Proveedor"];
        $nameId = "ID_Proveedor";

        $respuesta = ProveedoresControlador::ctrActualizarProveedor($table, $data, $id, $nameId);

        echo json_encode($respuesta);
    }

    public function ajaxEliminarProveedor()
    {

        $table = "proveedor";
        $id = $_POST["ID_Proveedor"];
        $nameId = "ID_Proveedor";

        $respuesta = ProveedoresControlador::ctrEliminarProveedor($table, $id, $nameId);

        echo json_encode($respuesta);
    }

}


if (isset($_POST["accion"]) && $_POST["accion"] == "4") {
    $proveedores2 = new AjaxProveedores();
    $proveedores2->ajaxListarProveedores2();

} else if (isset($_POST["accion"]) && $_POST["accion"] == "5") {
    $agregarProveedor = new AjaxProveedores();
    $agregarProveedor->Nombre = $_POST["Nombre"];
    $agregarProveedor->ajaxAgregarProveedor();

} else if (isset($_POST['accion']) && $_POST['accion'] == 6) { // ACCION PARA ACTUALIZAR UN PRODUCTO

    $actualizarProveedor = new AjaxProveedores();

    $data = array(
        "Nombre" => $_POST["Nombre"],
    );

    $actualizarProveedor->ajaxActualizarProveedor($data);

} else if (isset($_POST['accion']) && $_POST['accion'] == 11) { // ACCION PARA ELIMINAR UN PRODUCTO

    $eliminarProveedor = new AjaxProveedores();
    $eliminarProveedor->ajaxEliminarProveedor();

} else {
    $proveedores = new AjaxProveedores();
    $proveedores->ajaxListarProveedores();
}
?>