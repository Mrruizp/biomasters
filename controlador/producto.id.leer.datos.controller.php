<?php

require_once '../modelo/Producto.class.php';
require_once '../util/functions/Helper.class.php';

try {

    //print_r($_POST);
    $codProducto = $_POST["p_codProducto"];

    $objProducto = new Producto();
    $resultado   = $objProducto->listarProductoId($codProducto);

    Helper::imprimeJSON(200, "", $resultado);
} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}
