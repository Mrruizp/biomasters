<?php

try {

    require_once '../modelo/Promocion.class.php';
    require_once '../util/functions/Helper.class.php';
    //print_r($_POST);
    /*if
    (
    !isset($_POST["p_foto"]) ||
    empty($_POST["p_foto"]) ||

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
     */
    $codPromocion = $_POST["textCod_prom"];
    $nombre       = $_POST["txtNombre"];
    $descripcion  = $_POST["txtDescripcion"];
    $estado       = $_POST["txtEstado"];
    //$tipoOperacion = $_POST["p_tipo_ope"];

    $objPrmocion = new Promocion();
    if (!$codPromocion) {
        //print_r("entraaaaaaaaa1");
        $resultado = $objPrmocion->agregar($nombre, $descripcion, $estado);
    } else {
        //print_r($_POST);
        $resultado = $objPrmocion->editar($codPromocion, $nombre, $descripcion, $estado);
        // print_r($resultado);
    }

    $objPrmocion_leer = new Promocion();
    if (!$codPromocion) {
        $resultado_2 = $objPrmocion_leer->leerDatos();
    } else {

        $resultado_2 = $codPromocion;
    }

    //print_r("hola2");
    if ($_FILES["file-upload"]["name"] != "") {

        $tipo_archivo     = $_FILES["file-upload"]["type"];
        $direccion_subida = "../vista/fotos/promocion/";

        $nombre_archivo_subir = $direccion_subida . $resultado_2 . ".png";

        /*
        if ($tipo_archivo == "image/png"){
        $nombre_archivo_subir = $direccion_subida . $dni . ".png";
        }else{
        $nombre_archivo_subir = $direccion_subida . $dni . ".jpg";
        }
         */

        $resultado_subida = move_uploaded_file($_FILES["file-upload"]["tmp_name"], $nombre_archivo_subir);
        //print_r($resultado_subida);
        /*if ($resultado_subida) {
    //true
    Helper::mensaje("Se ha guardado los datos", "s", "../vista/gestionar.producto.view.php", 4);
    }*/

    }
    Helper::mensaje("Se ha guardado los datos", "s", "../vista/gestionar.promocion.view.php", 4);
} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}

/*
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
 */
