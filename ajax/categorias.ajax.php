<?php
require_once "../controlador/categorias.controlador.php";
require_once "../modelo/categorias.modelo.php";
class AjaxCategorias
{
    public $Nombre;
    public $Id_Categoria;


    public function ajaxListarCategorias()
    {
        $categorias = CategoriasControlador::ctrListarCategorias();

        echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }


    public function ajaxListarCategorias2()
    {
        $categorias2 = CategoriasControlador::ctrListarCategorias2();

        echo json_encode($categorias2);
    }


    public function ajaxAgregarCategorias()
    {

        $categoria = CategoriasControlador::ctrAgregarCategorias($this->Nombre);

        echo json_encode($categoria);
    }


    // public function ajaxActualizarProveedor()
    // {

    //     $proveedor2 = ProveedoresControlador::ctrActualizarProveedor($this->Id_Proveedor, $this->Nombre);

    //     echo json_encode($proveedor2);
    // }

}


if (isset($_POST["accion"]) && $_POST["accion"] == "7") {
    $categorias2 = new AjaxCategorias();
    $categorias2->ajaxListarCategorias2();

} else if (isset($_POST["accion"]) && $_POST["accion"] == "8") {
    $agregarCategoria = new AjaxCategorias();
    $agregarCategoria->Nombre = $_POST["Nombre"];
    $agregarCategoria->ajaxAgregarCategorias();

} else if (isset($_POST["accion"]) && $_POST["accion"] == "9") {
    $actualizarProveedor = new AjaxProveedores();
    $actualizarProveedor->Id_Proveedor = $_POST["ID_Proveedor"];
    $actualizarProveedor->Nombre = $_POST["Nombre"];
    $actualizarProveedor->ajaxActualizarProveedor();

} else {
    $categorias = new AjaxCategorias();
    $categorias->ajaxListarCategorias();
}
?>