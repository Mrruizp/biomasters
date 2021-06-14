<?php

require_once '../modelo/Producto.class.php';
require_once '../util/functions/Helper.class.php';

/*
isset: Determina si una variable está definida y no es null
empty: Determina si una variable está vacía
 */

//print_r($categoria_id[1]);

try {

    $url          = $_SERVER["REQUEST_URI"];
    $cadena       = substr($url, 26);
    $pagina       = explode('?', $cadena);
    $tipo_id      = explode('=', $pagina[1]);
    $categoria_id = explode('=', $pagina[2]);

    $objProducto = new Producto();
    $resultado   = $objProducto->listarProducto_tipo_categoria($tipo_id[1], $categoria_id[1]);

    $resultado2 = $objProducto->listar_contar($tipo_id[1], $categoria_id[1]);

    //print_r($resultado);
    //Helper::imprimeJSON(200, "", $resultado);
} catch (Exception $exc) {
    // Helper::imprimeJSON(500, $exc->getMessage(), "");
}
