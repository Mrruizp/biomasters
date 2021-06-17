<?php

try {

    require_once '../modelo/Comentario.class.php';
    require_once '../util/functions/Helper.class.php';
    //print_r($_POST);
    if
    (
        !isset($_POST["p_nombre"]) ||
        empty($_POST["p_nombre"]) ||

        !isset($_POST["p_email"]) ||
        empty($_POST["p_email"]) ||

        !isset($_POST["p_comentario"]) ||
        empty($_POST["p_comentario"])

    ) {
        Helper::imprimeJSON(500, "Falta completar datos", "");
        exit();
    }

    $nombre     = $_POST["p_nombre"];
    $email      = $_POST["p_email"];
    $comentario = $_POST["p_comentario"];

    $tipoOperacion = $_POST["p_tipo_ope"];

    $objComentario = new Comentario();

    $resultado = $objComentario->agregar($nombre, $email, $comentario);

    if ($resultado) {
        Helper::imprimeJSON(200, "Enviado correctamente", "");
    }

} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}
