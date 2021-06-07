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

    $objPromocion = new Promocion();
    $resultado    = $objPromocion->eliminar($codPromocion);

    if ($resultado) {
        Helper::imprimeJSON(200, "Se eliminó correctamente", "");
    }

} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}
