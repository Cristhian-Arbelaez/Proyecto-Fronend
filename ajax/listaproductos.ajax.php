<?php
require_once "../controlador/listaproductos.controlador.php";
require_once "../modelo/listaproductos.modelo.php";
class AjaxListaProductos
{
    // public $Nombre;
    // public $Id_Proveedor;

    public function ajaxListarListaProductos()
    {
        $listaproductos = ListaProductosControlador::ctrListarListaProductos();

        echo json_encode($listaproductos);
    }

    public function ajaxListarListaProductos2()
    {
        $listaproductos2 = ListaProductosControlador::ctrListarListaProductos2();

        echo json_encode($listaproductos2, JSON_UNESCAPED_UNICODE);
    }


    // public function ajaxAgregarProveedor()
    // {

    //     $proveedor = ProveedoresControlador::ctrAgregarProveedor($this->Nombre);

    //     echo json_encode($proveedor);
    // }


    // public function ajaxActualizarProveedor()
    // {

    //     $proveedor2 = ProveedoresControlador::ctrActualizarProveedor($this->Id_Proveedor, $this->Nombre);

    //     echo json_encode($proveedor2);
    // }

}


if (isset($_POST["accion"]) && $_POST["accion"] == "10") {
    $listaproductos = new AjaxListaProductos();
    $listaproductos->ajaxListarListaProductos();

}else{
    $listaproductos2 = new AjaxListaProductos();
    $listaproductos2->ajaxListarListaProductos2();
}

// } else if (isset($_POST["accion"]) && $_POST["accion"] == "8") {
//     $agregarProveedor = new AjaxProveedores();
//     $agregarProveedor->Nombre = $_POST["Nombre"];
//     $agregarProveedor->ajaxAgregarProveedor();

// } else if (isset($_POST["accion"]) && $_POST["accion"] == "9") {
//     $actualizarProveedor = new AjaxProveedores();
//     $actualizarProveedor->Id_Proveedor = $_POST["ID_Proveedor"];
//     $actualizarProveedor->Nombre = $_POST["Nombre"];
//     $actualizarProveedor->ajaxActualizarProveedor();

// } else {
//     
// }
?>