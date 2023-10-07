<?php 
    require_once "Controladores/plantilla.controlador.php";
    require_once "Controladores/formularios.controlador.php";
    require_once "Modelos/formularios.modelo.php";

    $plantilla = new ControladorPlantilla();
    $plantilla -> ctrTraerPlantilla();
?>