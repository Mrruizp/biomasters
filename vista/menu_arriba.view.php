
<title>Biomaster's Medical</title>
<div class="navbar-area">
    <div class="theme-responsive-nav">
        <div class="container">
            <div class="theme-responsive-menu">
                <div class="logo">
                    <a href="index.php">
                        <img src="../images/logo_v2.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="theme-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="../images/logo_v2.png" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">




<?php
$url    = $_SERVER["REQUEST_URI"];
$cadena = substr($url, 26);
$pagina = explode('?', $cadena);
//print_r($cadena);

switch ($pagina[0]) {
    case 'index.php':
        echo "<li class='nav-item'><a href='javascript:void(0);' class='nav-link active'>INICIO</a></li>";
        echo "<li class='nav-item'><a href='nosotros.php' class='nav-link'>NOSOTROS</a></li>";
        echo "<li class='nav-item'><a href='' class='nav-link'><i class='bx bx-cart'></i> PRODUCTOS <i class='bx bx-chevron-down'></i></a>";
        echo "<ul class='dropdown-menu'>
                <li class='nav-item'>
                    <a href='javascript:void(0);' class='nav-link'>Veterinaria
                    </a>
                    <ul class='dropdown-menu'>
                        <li class='nav-item'>
                            <a href='#' data-tipo='1' data-categoria='1' class='nav-link btn-analizar_veterinaria'>
                                Analizadores
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='#' data-tipo='2' data-categoria='1' class='nav-link btn-analizar_veterinaria'>
                                Controles y calibradores
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='#' data-tipo='3' data-categoria='1' class='nav-link btn-analizar_veterinaria'>
                                Reactivos Hematol??gicos
                            </a>
                            </li>
                        </ul>

        <li class='nav-item'><a href='#' class='nav-link'>Coagulaci??n</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Controles y calibradores</a></li>
        <li class='nav-item'><a href='#' data-tipo='3' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Reactivos Hematol??gicos</a></li></ul>

        <li class='nav-item'><a href='#' class='nav-link'>Bioqu??mica</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='3' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='3' class='nav-link btn-analizar_veterinaria'>Reactivos</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0)' class='nav-link'>Cadena de Fr??o</a></li>
        <li class='nav-item'><a href='producto.php' class='nav-link'>Hematolog??a</a></li>
        <li class='nav-item'><a href='producto.php' class='nav-link'>Equipamiento</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Inmunolog??a</a>
        <ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Analizadores</a>
        </li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Pruebas r??pidas</a></li>
        <li class='nav-item'><a href='#' data-tipo='3' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Reactivos de Eliza</a></li></ul>

        <li class='nav-item'><a href='producto.php' class='nav-link'>Repuestos</a></li>
        <li class='nav-item'><a href='producto.php' class='nav-link'>Gass y Electrolitos</a></li></ul></li>";
        //echo "<li class='nav-item'><a href='about.html' class='nav-link'>PROMOCIONES</a></li>";
        echo "<li class='nav-item'><a href='contacto.php' class='nav-link'>CONT??CTANOS</a></li>";
        echo "<li class='nav-item'><a href='login.php' class='nav-link'><i class='bx bx-user'></i> INICIAR SESI??N</a></li>";
        break;
    case 'nosotros.php':
        echo "<li class='nav-item'><a href='index.php' class='nav-link'>INICIO</a></li>";
        echo "<li class='nav-item'><a href='nosotros.php' class='nav-link active'>NOSOTROS</a></li>";
        echo "<li class='nav-item'><a href='' class='nav-link'><i class='bx bx-cart'></i> PRODUCTOS <i class='bx bx-chevron-down'></i></a>";
        echo "<ul class='dropdown-menu'>
            <li class='nav-item'>
                <a href='javascript:void(0);' class='nav-link'>Veterinaria
                </a>
            <ul class='dropdown-menu'>
                <li class='nav-item'>
                    <a href='#' data-tipo='1' data-categoria='1' class='nav-link btn-analizar_veterinaria'>
                        Analizadores
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='#' data-tipo='2' data-categoria='1' class='nav-link btn-analizar_veterinaria'>
                        Controles y calibradores
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='#' data-tipo='3' data-categoria='1' class='nav-link btn-analizar_veterinaria'>
                        Reactivos Hematol??gicos
                    </a>
                </li>
            </ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Coagulaci??n</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Controles y calibradores</a></li>
        <li class='nav-item'><a href='#' data-tipo='3' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Reactivos Hematol??gicos</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Bioqu??mica</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='3' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='3' class='nav-link btn-analizar_veterinaria'>Reactivos</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0)' class='nav-link'>Cadena de Fr??o</a></li>
        <li class='nav-item'><a href='javascript:void(0)' class='nav-link'>Hematolog??a</a></li>
        <li class='nav-item'><a href='javascript:void(0)' class='nav-link'>Equipamiento</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Inmunolog??a</a>
        <ul class='dropdown-menu'>
        <li class='nav-item'><a href='producto.php' data-tipo='1' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Analizadores</a>
        </li>
        <li class='nav-item'><a href='producto.php' data-tipo='2' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Pruebas r??pidas</a></li>
        <li class='nav-item'><a href='producto.php' data-tipo='3' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Reactivos de Eliza</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Repuestos</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Gass y Electrolitos</a></li></ul></li>";
        //echo "<li class='nav-item'><a href='promociones.php' class='nav-link'>PROMOCIONES</a></li>";
        echo "<li class='nav-item'><a href='contacto.php' class='nav-link'>CONT??CTANOS</a></li>";
        echo "<li class='nav-item'><a href='login.php' class='nav-link'><i class='bx bx-user'></i> INICIAR SESI??N</a></li>";
        break;
    case 'producto.php':
        echo "<li class='nav-item'><a href='index.php' class='nav-link'>INICIO</a></li>";
        echo "<li class='nav-item'><a href='nosotros.php' class='nav-link'>NOSOTROS</a></li>";
        echo "<li class='nav-item'><a href='javascript:void(0);' class='nav-link active'><i class='bx bx-cart'></i> PRODUCTOS <i class='bx bx-chevron-down'></i></a>";
        echo "<ul class='dropdown-menu'><li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Veterinaria</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='1' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='1' class='nav-link btn-analizar_veterinaria'>Controles y calibradores</a></li>
        <li class='nav-item'><a href='#' data-tipo='3' data-categoria='1' class='nav-link btn-analizar_veterinaria'>Reactivos Hematol??gicos</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Coagulaci??n</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Controles y calibradores</a></li>
        <li class='nav-item'><a href='#' data-tipo='3' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Reactivos Hematol??gicos</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Bioqu??mica</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='3' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='3' class='nav-link btn-analizar_veterinaria'>Reactivos</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Cadena de Fr??o</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Hematolog??a</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Equipamiento</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Inmunolog??a</a>
        <ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Analizadores</a>
        </li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Pruebas r??pidas</a></li>
        <li class='nav-item'><a href='#' data-tipo='3' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Reactivos de Eliza</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Repuestos</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Gass y Electrolitos</a></li></ul></li>";
        //echo "<li class='nav-item'><a href='promociones.php' class='nav-link'>PROMOCIONES</a></li>";
        echo "<li class='nav-item'><a href='contacto.php' class='nav-link'>CONT??CTANOS</a></li>";
        echo "<li class='nav-item'><a href='login.php' class='nav-link'><i class='bx bx-user'></i> INICIAR SESI??N</a></li>";
        break;
    case 'contacto.php':
        echo "<li class='nav-item'><a href='javascript:void(0);' class='nav-link'>INICIO</a></li>";
        echo "<li class='nav-item'><a href='nosotros.php' class='nav-link'>NOSOTROS</a></li>";
        echo "<li class='nav-item'><a href='' class='nav-link'><i class='bx bx-cart'></i> PRODUCTOS <i class='bx bx-chevron-down'></i></a>";
        echo "<ul class='dropdown-menu'><li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Veterinaria</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='1' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='1' class='nav-link btn-analizar_veterinaria'>Controles y calibradores</a></li>
        <li class='nav-item'><a href='#' data-tipo='3' data-categoria='1' class='nav-link btn-analizar_veterinaria'>Reactivos Hematol??gicos</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Coagulaci??n</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Controles y calibradores</a></li>
        <li class='nav-item'><a href='#' data-tipo='3' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Reactivos Hematol??gicos</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Bioqu??mica</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='3' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='3' class='nav-link btn-analizar_veterinaria'>Reactivos</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Cadena de Fr??o</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Hematolog??a</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Equipamiento</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Inmunolog??a</a>
        <ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Analizadores</a>
        </li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Pruebas r??pidas</a></li>
        <li class='nav-item'><a href='#' data-tipo='3' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Reactivos de Eliza</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Repuestos</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Gass y Electrolitos</a></li></ul></li>";
        //echo "<li class='nav-item'><a href='promociones.php' class='nav-link'>PROMOCIONES</a></li>";
        echo "<li class='nav-item'><a href='contacto.php' class='nav-link active'>CONT??CTANOS</a></li>";
        echo "<li class='nav-item'><a href='login.php' class='nav-link'><i class='bx bx-user'></i> INICIAR SESI??N</a></li>";
        break;

    case 'producto-detalle.php':
        echo "<li class='nav-item'><a href='index.php' class='nav-link'>INICIO</a></li>";
        echo "<li class='nav-item'><a href='nosotros.php' class='nav-link'>NOSOTROS</a></li>";
        echo "<li class='nav-item'><a href='javascript:void(0);' class='nav-link active'><i class='bx bx-cart'></i> PRODUCTOS <i class='bx bx-chevron-down'></i></a>";
        echo "<ul class='dropdown-menu'><li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Veterinaria</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='1' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='1' class='nav-link btn-analizar_veterinaria'>Controles y calibradores</a></li>
        <li class='nav-item'><a href='#' data-tipo='3' data-categoria='1' class='nav-link btn-analizar_veterinaria'>Reactivos Hematol??gicos</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Coagulaci??n</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Controles y calibradores</a></li>
        <li class='nav-item'><a href='#' data-tipo='3' data-categoria='2' class='nav-link btn-analizar_veterinaria'>Reactivos Hematol??gicos</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Bioqu??mica</a><ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='3' class='nav-link btn-analizar_veterinaria'>Analizadores</a></li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='3' class='nav-link btn-analizar_veterinaria'>Reactivos</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Cadena de Fr??o</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Hematolog??a</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Equipamiento</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Inmunolog??a</a>
        <ul class='dropdown-menu'>
        <li class='nav-item'><a href='#' data-tipo='1' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Analizadores</a>
        </li>
        <li class='nav-item'><a href='#' data-tipo='2' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Pruebas r??pidas</a></li>
        <li class='nav-item'><a href='#' data-tipo='3' data-categoria='7' class='nav-link btn-analizar_veterinaria'>Reactivos de Eliza</a></li></ul>

        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Repuestos</a></li>
        <li class='nav-item'><a href='javascript:void(0);' class='nav-link'>Gass y Electrolitos</a></li></ul></li>";
        //echo "<li class='nav-item'><a href='promociones.php' class='nav-link'>PROMOCIONES</a></li>";
        echo "<li class='nav-item'><a href='contacto.php' class='nav-link'>CONT??CTANOS</a></li>";
        echo "<li class='nav-item'><a href='login.php' class='nav-link'><i class='bx bx-user'></i> INICIAR SESI??N</a></li>";
        break;

}
?>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
   <!--<div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-option">
                        <div class="option-item">
                            <form>
                                <input type="text" class="input-search" placeholder="Search...">
                                <button type="submit"><i class='bx bx-search-alt'></i></button>
                            </form>
                        </div>
                        <div class="option-item">
                            <div class="wishlist-btn">
                                <a href="wishlist.html"><i class='bx bx-heart'></i></a>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="#" data-toggle="modal" data-target="#shoppingCartModal"><i
                                        class='bx bx-cart'></i><span>3</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</div>
