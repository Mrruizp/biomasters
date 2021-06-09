<?php

require_once '../modelo/Producto.class.php';
require_once '../util/functions/Helper.class.php';
try {
    $objProducto = new Producto();
    $producto_id = 2;
    $resultado2  = $objProducto->listarLosRecienLLegados($producto_id);

} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}
