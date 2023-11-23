<?php
require_once "../controlador/productos.controlador.php";
require_once "../modelo/productos.modelo.php";

class AjaxProductos
{
    public $Nombre;
    public $Precio;
    public $ID_Proveedor;
    public $ID_Categoria;

    public $id_producto;
    public $nombre_producto;
    public $precio_producto;
    public $proveedor_producto;


    public function ajaxListarProductos()
    {

        $productos = ProductosControlador::ctrListarProductos();

        echo json_encode($productos);
    }


    public function ajaxAgregarProducto()
    {

        $producto = ProductosControlador::ctrAgregarProducto($this->Nombre, $this->Precio, $this->ID_Proveedor, $this->ID_Categoria);

        echo json_encode($producto);
    }


    public function ajaxActualizarProducto()
    {

        $respuesta = ProductosControlador::ctrActualizarProducto($this->id_producto, $this->Nombre, $this->Precio, $this->ID_Proveedor);

        echo json_encode($respuesta);
    }

}

if (isset($_POST["accion"]) && $_POST["accion"] == "1") {
    $productos = new AjaxProductos();
    $productos->ajaxListarProductos();

} else if (isset($_POST["accion"]) && $_POST["accion"] == "2") {
    $agregarProducto = new AjaxProductos();
    $agregarProducto->Nombre = $_POST["Nombre"];
    $agregarProducto->Precio = $_POST["Precio"];
    $agregarProducto->ID_Proveedor = $_POST["ID_Proveedor"];
    $agregarProducto->ID_Categoria = $_POST["ID_Categoria"];
    $agregarProducto->ajaxAgregarProducto();

} else if (isset($_GET["accion"]) && $_GET["accion"] == "3") {
    $actualizarProducto = new AjaxProductos();
    $actualizarProducto->id_producto = $_GET["ID_Producto"];
    $actualizarProducto->Nombre = $_GET["Nombre"];
    $actualizarProducto->Precio = $_GET["Precio"];
    $actualizarProducto->ID_Proveedor = $_GET["ID_Proveedor"];
    $actualizarProducto->ajaxActualizarProducto();
}


?>