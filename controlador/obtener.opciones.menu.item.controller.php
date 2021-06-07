<?php

require_once '../modelo/Sesion.class.php';
require_once '../util/functions/Helper.class.php';
//print_r($_POST);
try {

    /*Recibir la variable POST que le envía la vista*/
    $codigoCargo = $_POST["codigo_cargo_usuario"];
    $codigoMenu  = $_POST["codigo_menu"];
    /*Recibir la variable POST que le envía la vista*/
//    print_r($codigoCargo);
    //    print_r($codigoMenu);
    $objSesion                   = new Sesion();
    $resultadoOpcionesMenuItemBD = $objSesion->obtenerOpcionesMenuItem($codigoCargo, $codigoMenu);
    //print_r($resultadoOpcionesMenuItemBD);
} catch (Exception $exc) {
    Funciones::mensaje($exc->getMessage(), "e");
}
