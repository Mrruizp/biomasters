<?php

try {
    require_once '../modelo/Promocion.class.php';
    require_once '../util/functions/Helper.class.php';

    if
    (
        !isset($_POST["p_promocion_id"]) ||
        empty($_POST["p_promocion_id"])

    ) {
        Helper::imprimeJSON(500, "Falta completar datos", "");
        exit();
    }

    $codPromocion = $_POST["p_promocion_id"];

    $codPromocion = new Promocion();
    $resultado    = $codPromocion->leerDatos_promocion($codPromocion);

    Helper::imprimeJSON(200, "", $resultado);

} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}
