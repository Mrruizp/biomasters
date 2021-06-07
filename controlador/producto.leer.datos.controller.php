<?php

try {
    require_once '../modelo/Producto.class.php';
    require_once '../util/functions/Helper.class.php';

    if
    (
        !isset($_POST["p_producto_id"]) ||
        empty($_POST["p_producto_id"])

    ) {
        Helper::imprimeJSON(500, "Falta completar datos", "");
        exit();
    }

    $codProducto = $_POST["p_producto_id"];

    $objProducto = new Producto();
    $resultado   = $objProducto->leerDatos_producto($codProducto);

    Helper::imprimeJSON(200, "", $resultado);

} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}
