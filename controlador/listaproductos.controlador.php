<?php
    class ListaProductosControlador{

        static public function ctrListarListaProductos(){
            $listaproductos = ListaProductosModelo::mdlListarListaProductos();
            return $listaproductos;
        }

        static public function ctrListarListaProductos2(){
            $listaproductos2 = ListaProductosModelo::mdlListarListaProductos2();
            return $listaproductos2;
        }

        // static public function ctrAgregarProveedor($Nombre){

        //     $registroproveedor = ProveedoresModelo::mdlAgregarProveedor($Nombre);
            
        //     return $registroproveedor;
        // }

        // static public function ctrActualizarProveedor($ID_Proveedor, $Nombre){

        //     $registroproveedor = ProveedoresModelo::mdlActualizarProveedor($ID_Proveedor, $Nombre);
            
        //     return $registroproveedor;
        // }
    }
?>
