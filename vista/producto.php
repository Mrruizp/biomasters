<?php
require_once '../controlador/producto.listarCatalogo.controller.php';

?>
<!DOCTYPE doctype html>
<html lang="zxx">
    <head>
        <?php include_once 'estilos.view.php';?>
    </head>
    <body>
        <?php include_once 'menu_arriba.view.php';?>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
            <section class="page-title-area">
                <div class="container">
                    <div class="page-title-content">
                        <h1>
                            Productos
                        </h1>
                        <ul>
                            <li style="font-size: 18px">
                                <a href="index.php">
                                    Inicio
                                </a>
                            </li>
                            <li style="font-size: 18px">
                                Productos
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="products-area ptb-70">
                <div class="container">
                    <!--<div class="theme-grid-sorting">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 result-count">
                                <p>
                                    Showing 1 to12 of 20
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-6 ordering">
                                <div class="select-box">
                                    <label>
                                        Sort By:
                                    </label>
                                    <select>
                                        <option>
                                            Default
                                        </option>
                                        <option>
                                            Popularity
                                        </option>
                                        <option>
                                            Latest
                                        </option>
                                        <option>
                                            Price: low to high
                                        </option>
                                        <option>
                                            Price: high to low
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>-->
        <div class="row">

<?php
//print_r();
$total = $resultado2[0]['total'];
for ($i = 0; $i < $total; $i++) {
    if ($resultado[$i]['producto_id']) {
        $id     = $resultado[$i]['producto_id'];
        $nombre = $resultado[$i]['nombre'];
        $ruta   = "fotos/productos/$id.png";

        echo "    <div class='col-lg-3 col-md-4 col-sm-6'>";
        echo "        <div class='single-products-box'>";
        echo "           <div class='image'>";
        echo "                <a href='products-details.html' class='d-block'><img src='$ruta' alt='image'></a>";
        //echo "                <div class='sale'>Sale!</div>";
        echo "                <ul class='buttons-list'>";
        echo "                    <li>";
        echo "                    <a href='#' data-toggle='modal' data-target='#productsQuickView'onclick='leerDatos($id);'>";
        echo "                    <i class='bx bx-search-alt'></i>";
        echo "                    <span class='tooltip-label'>Quick View</span>";
        echo "                    </a>";
        echo "                    </li>";
        echo "                </ul>";
        echo "            </div>";
        echo "            <div class='content'>";
        echo "                <h3><a href='products-details.html'>$nombre</a></h3>";
        echo "            </div>";
        echo "        </div>";
        echo "    </div>";
    }
}
?>



                        <!--<div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="pagination-area text-center">
                                <span aria-current="page" class="page-numbers current">
                                    1
                                </span>
                                <a class="page-numbers" href="products-grid.html">
                                    2
                                </a>
                                <a class="page-numbers" href="products-grid.html">
                                    3
                                </a>
                                <a class="page-numbers" href="products-grid.html">
                                    4
                                </a>
                                <a class="next page-numbers" href="products-grid.html">
                                    <i class="bx bx-chevron-right">
                                    </i>
                                </a>
                            </div>
                        </div>-->
                    </div>
                </div>
            </section>

            <?php include_once 'pie.view.php';?>

            <div aria-hidden="true" class="modal fade productsQuickView" id="productsQuickView" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                <i class="bx bx-x">
                                </i>
                            </span>
                        </button>
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="products-image">
                                    <img alt="image" id="ruta_producto" src="">
                                    </img>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="products-content">
                                    <h3 id="titulo_producto"></h3>
                                    <p id="decripcion_producto"></p>

                                    <ul class="social-share">
                                        <li>
                                            <span>
                                                Share:
                                            </span>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/Biomasters-Medical-102939435252436" target="_blank">
                                                <i class="bx bxl-facebook-square">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/biomastersmedical/" target="_blank">
                                                <i class="bx bxl-instagram-alt">
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="go-top">
                <i class="bx bx-up-arrow-alt">
                </i>
            </div>
            <?php include_once 'scripts.view.php';?>

            <script src="js/producto_tipo_categoria.js" type="text/javascript"></script>
        </link>
    </body>
</html>
