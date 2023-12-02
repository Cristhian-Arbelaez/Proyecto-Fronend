<?php
require_once "../controlador/productos.controlador.php";
require_once "../modelo/productos.modelo.php";
require_once "../modelo/editar-eliminar.modelo.php";

class AjaxProductos
{
    public $Nombre;
    public $Precio;
    public $ID_Proveedor;
    public $ID_Categoria;


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

    public function ajaxActualizarProducto($data)
    {

        $table = "producto";
        $id = $_POST["ID_Producto"];
        $nameId = "ID_Producto";

        $respuesta = ProductosControlador::ctrActualizarProducto($table, $data, $id, $nameId);

        echo json_encode($respuesta);
    }

    public function ajaxEliminarProducto()
    {

        $table = "producto";
        $id = $_POST["ID_Producto"];
        $nameId = "ID_Producto";

        $respuesta = ProductosControlador::ctrEliminarProducto($table, $id, $nameId);

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


} else if (isset($_POST['accion']) && $_POST['accion'] == 3) { // ACCION PARA ACTUALIZAR UN PRODUCTO

    $actualizarProducto = new ajaxProductos();

    $data = array(
        "Nombre" => $_POST["Nombre"],
        "Precio" => $_POST["Precio"],
        "ID_Proveedor" => $_POST["ID_Proveedor"],
        "ID_Categoria" => $_POST["ID_Categoria"],
    );

    $actualizarProducto->ajaxActualizarProducto($data);
} else if (isset($_POST['accion']) && $_POST['accion'] == 10) { // ACCION PARA ELIMINAR UN PRODUCTO

    $eliminarProducto = new ajaxProductos();
    $eliminarProducto->ajaxEliminarProducto();
}


?>