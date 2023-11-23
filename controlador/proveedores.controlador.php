<?php
    class ProveedoresControlador{
        static public function ctrListarProveedores(){
            $proveedores = ProveedoresModelo::mdlListarProveedores();
            return $proveedores;
        }

        static public function ctrListarProveedores2(){
            $proveedores2 = ProveedoresModelo::mdlListarProveedores2();
            return $proveedores2;
        }

        static public function ctrAgregarProveedor($Nombre){

            $registroproveedor = ProveedoresModelo::mdlAgregarProveedor($Nombre);
            
            return $registroproveedor;
        }

        static public function ctrActualizarProveedor($ID_Proveedor, $Nombre){

            $registroproveedor = ProveedoresModelo::mdlActualizarProveedor($ID_Proveedor, $Nombre);
            
            return $registroproveedor;
        }
    }
?>
