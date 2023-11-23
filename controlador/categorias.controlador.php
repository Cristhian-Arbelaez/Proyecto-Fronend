<?php
    class CategoriasControlador{
        static public function ctrListarCategorias(){
            $categorias = CategoriasModelo::mdlListarCategorias();
            return $categorias;
        }

        static public function ctrListarCategorias2(){
            $categorias2 = CategoriasModelo::mdlListarCategorias2();
            return $categorias2;
        }

        static public function ctrAgregarCategorias($Nombre){
            $registrocategoria = CategoriasModelo::mdlAgregarCategoria($Nombre);
            return $registrocategoria;
        }

        // static public function ctrActualizarProveedor($ID_Proveedor, $Nombre){

        //     $registroproveedor = ProveedoresModelo::mdlActualizarProveedor($ID_Proveedor, $Nombre);
            
        //     return $registroproveedor;
        // }
    }
?>
