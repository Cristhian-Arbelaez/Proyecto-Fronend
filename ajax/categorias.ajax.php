<?php
require_once "../controlador/categorias.controlador.php";
require_once "../modelo/categorias.modelo.php";
require_once "../modelo/editar-eliminar.modelo.php";
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

    public function ajaxActualizarCategoria($data)
    {

        $table = "categoria";
        $id = $_POST["ID_Categoria"];
        $nameId = "ID_Categoria";

        $respuesta = CategoriasControlador::ctrActualizarCategoria($table, $data, $id, $nameId);

        echo json_encode($respuesta);
    }

    public function ajaxEliminarCategoria()
    {

        $table = "categoria";
        $id = $_POST["ID_Categoria"];
        $nameId = "ID_Categoria";

        $respuesta = CategoriasControlador::ctrEliminarCategoria($table, $id, $nameId);

        echo json_encode($respuesta);
    }

}


if (isset($_POST["accion"]) && $_POST["accion"] == "7") {
    $categorias2 = new AjaxCategorias();
    $categorias2->ajaxListarCategorias2();

} else if (isset($_POST["accion"]) && $_POST["accion"] == "8") {
    $agregarCategoria = new AjaxCategorias();
    $agregarCategoria->Nombre = $_POST["Nombre"];
    $agregarCategoria->ajaxAgregarCategorias();

} else if (isset($_POST['accion']) && $_POST['accion'] == 9) { 

    $actualizarCategoria = new AjaxCategorias();

    $data = array(
        "Nombre" => $_POST["Nombre"],
    );

    $actualizarCategoria->ajaxActualizarCategoria($data);

} else if (isset($_POST['accion']) && $_POST['accion'] == 12) { 

    $eliminarCategoria = new AjaxCategorias();
    $eliminarCategoria->ajaxEliminarCategoria();

} else {
    $categorias = new AjaxCategorias();
    $categorias->ajaxListarCategorias();
}
?>