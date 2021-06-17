<?php

require_once '../modelo/Comentario.class.php';
require_once '../util/functions/Helper.class.php';

try {
    $objComentario = new Comentario();
    $resultado     = $objComentario->listar();

    Helper::imprimeJSON(200, "", $resultado);
} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}
