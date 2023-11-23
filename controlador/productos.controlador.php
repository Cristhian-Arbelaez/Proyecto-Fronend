<?php
    class ProductosControlador{
        static public function ctrListarProductos(){

            $productos = ProductosModelo::mdlListarProductos();
            
            return $productos;
        }

        static public function ctrAgregarProducto($Nombre, $Precio, $ID_Proveedor, $ID_Categoria){

            $registroproducto = ProductosModelo::mdlAgregarProducto($Nombre, $Precio, $ID_Proveedor, $ID_Categoria);
            
            return $registroproducto;
        }

        static public function ctrActualizarProducto($id_producto, $Nombre, $Precio, $ID_Proveedor){

            $actualizarproducto = ProductosModelo::mdlActualizarProducto($id_producto, $Nombre, $Precio, $ID_Proveedor);
            
            return $actualizarproducto;
        }

        
    }
?>