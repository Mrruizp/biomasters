<?php

try {

    require_once '../modelo/Producto.class.php';
    require_once '../util/functions/Helper.class.php';
    //print_r($_POST);
    if
    (
        !isset($_POST["textCod_prod"]) ||
        empty($_POST["textCod_prod"]) ||

        !isset($_POST["txtNombre"]) ||
        empty($_POST["txtNombre"]) ||

        !isset($_POST["txtDescripcion"]) ||
        empty($_POST["txtDescripcion"]) ||

        !isset($_POST["txtEstado"]) ||
        empty($_POST["txtEstado"])

    ) {
        Helper::imprimeJSON(500, "Falta completar datos", "");
        exit();
    }

    $codProducto = $_POST["textCod_prod"];
    $nombre      = $_POST["txtNombre"];
    $descripcion = $_POST["txtDescripcion"];
    $estado      = $_POST["txtEstado"];
    //$tipoOperacion = $_POST["p_tipo_ope"];

    $objProducto = new Producto();

    $resultado = $objProducto->editar($codProducto, $nombre, $descripcion, $estado);

    $resultado_2 = $codProducto;

    //print_r($resultado_2);

    if ($_FILES["archivo"]["error"] > 0) {
        echo "Error al cargar archivo";
    } else {

        $permitidos = array("image/png");
        $limite_kb  = 2000;

        if (in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024) {

            $ruta    = '../vista/fotos/' . $resultado_2 . '/';
            $archivo = $ruta . $_FILES["archivo"]["name"];
            //echo $archivo;
            if (!file_exists($ruta)) {
                mkdir($ruta);
            }

            if (!file_exists($archivo)) {
                $res = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
            }
            if ($res) {
                //  echo " <script>window.location.replace('../vista/gestionar.producto.view.php');</script>";
                Helper::mensaje("Producto Registrado", "s", "../vista/gestionar.producto.view.php", 4);
            } else {
                echo "imagennoguardado";
            }

        } else {
            echo "Archivonopermitidooexcedeeltamaño";
        }

    }

} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}
