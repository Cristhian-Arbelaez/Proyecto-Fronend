<?php
require_once "../controlador/dashboard.controlador.php";
require_once "../modelo/dashboard.modelo.php";
class AjaxDashboard
{

    public function getDatosDashboard()
    {

        $datos = DashboardControlador::ctrGetDatosDashboard();

        echo json_encode($datos);
    }
}

$datos = new AjaxDashboard();
$datos->getDatosDashboard();

?>