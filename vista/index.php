<?php
require_once '../controlador/productoMasVendido.leer.datos.controller.php';
require_once '../controlador/productoLosRecienLlegados.leer.datos.controller.php';
?>
<!doctype html>
<html lang="zxx">

<head>
    <?php include_once 'estilos.view.php';?>

</head>
<body>

   <?php include_once 'menu_arriba.view.php';?>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!--<a href="https://api.whatsapp.com/send?phone=51996031277&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20de%20sus%20servicios%20." class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>-->
<section>
    <div class="slider-wrapper theme-mi-slider">
        <div id="slider" class="nivoSlider">
            <img src="../images/portada/22.jpg" alt="" title="#htmlcaption1" />
            <img src="../images/portada/4.jpeg" alt="" title="#htmlcaption2" />
            <img src="../images/portada/22.jpg" alt="" title="#htmlcaption3" />
        </div>
        <div id="htmlcaption1" class="nivo-html-caption">
            <h1>Sean Bienvenidos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div id="htmlcaption2" class="nivo-html-caption">
            <!--<h1>Acerca de Nosotros</h1>-->
        </div>
        <div id="htmlcaption3" class="nivo-html-caption">
            <h1>Gracias por visitar</h1>
        </div>
    </div>
</section>
<section id="listar_promocion">

</section>

<section class="categories-area bg-f9faff pt-70 pb-40">
    <div class="container">
        <div class="section-title">
            <h1 class="bg-f9faff">Categoría</h1>
        </div>
        <div class="row">
            <div class="col-lg-2 col-sm-4 col-md-4">
                <div class="single-categories-box">
                    <a class="image d-block" href="products-grid.html"><img
                            src="../util/Medishop/html/assets/img/categories/categories-img1.png" alt="image" style="height: 100px; width: 100px"></a>
                    <h3><a href="products-grid.html">Veterinaria</a></h3>
                    <span>9 items</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4">
                <div class="single-categories-box">
                    <a class="image d-block" href="products-grid.html"><img
                            src="../util/Medishop/html/assets/img/categories/categories-img2.png" alt="image" style="height: 100px; width: 100px"></a>
                    <h3><a href="products-grid.html">Coagulación</a></h3>
                    <span>5 items</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4">
                <div class="single-categories-box">
                    <a class="image d-block" href="products-grid.html"><img
                            src="../util/Medishop/html/assets/img/categories/categories-img3.png" alt="image" style="height: 100px; width: 100px"></a>
                    <h3><a href="products-grid.html">Bioquímica</a></h3>
                    <span>7 items</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4">
                <div class="single-categories-box">
                    <a class="image d-block" href="products-grid.html"><img
                            src="../util/Medishop/html/assets/img/categories/categories-img4.png" alt="image" style="height: 100px; width: 100px"></a>
                    <h3><a href="products-grid.html">Cadena de Frío</a></h3>
                    <span>15 items</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4">
                <div class="single-categories-box">
                    <a class="image d-block" href="products-grid.html"><img
                            src="../util/Medishop/html/assets/img/categories/categories-img5.png" alt="image" style="height: 100px; width: 100px"></a>
                    <h3><a href="products-grid.html">Hematología</a></h3>
                    <span>18 items</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4">
                <div class="single-categories-box">
                    <a class="image d-block" href="products-grid.html"><img
                            src="../util/Medishop/html/assets/img/categories/categories-img6.png" alt="image" style="height: 100px; width: 100px"></a>
                    <h3><a href="products-grid.html">Equipamiento</a></h3>
                    <span>8 items</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-sm-4 col-md-4">
                <div class="single-categories-box">
                    <a class="image d-block" href="products-grid.html"><img
                            src="../util/Medishop/html/assets/img/categories/categories-img1.png" alt="image" style="height: 100px; width: 100px"></a>
                    <h3><a href="products-grid.html">Inmunología</a></h3>
                    <span>9 items</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4">
                <div class="single-categories-box">
                    <a class="image d-block" href="products-grid.html"><img
                            src="../util/Medishop/html/assets/img/categories/categories-img2.png" alt="image" style="height: 100px; width: 100px"></a>
                    <h3><a href="products-grid.html">Repuestos</a></h3>
                    <span>5 items</span>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4">
                <div class="single-categories-box">
                    <a class="image d-block" href="products-grid.html"><img
                            src="../util/Medishop/html/assets/img/categories/categories-img3.png" alt="image" style="height: 100px; width: 100px"></a>
                    <h3><a href="products-grid.html">Gass y Electrolitos</a></h3>
                    <span>7 items</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products-area pt-70 pb-40">
    <div class="container">
        <div class="section-title">
            <h2>Más vendido</h2>
        </div>
        <div class="products-slides owl-carousel owl-theme">
<?php
for ($i = 0; $i < 6; $i++) {
    if ($resultado[$i]['producto_id']) {
        $id   = $resultado[$i]['producto_id'];
        $ruta = "fotos/productos/$id.png";
        //echo $ruta;
        echo "<div class='single-products-box'>";
        echo "        <div class='image'>";
        echo "            <a href='products-details.html' class='d-block'>";
        echo "                <img src='$ruta' alt='image'>";
        echo "            </a>";
        echo "            <ul class='buttons-list'>";
        echo "                <li>";
        echo "                    <a href='#' data-toggle='modal' data-target='#productsQuickView' onclick='leerDatos($id);'>";
        echo "                        <i class='bx bx-search-alt'></i>";
        echo "                        <span class='tooltip-label'>Quick View</span>";
        echo "                    </a>";
        echo "                </li>";
        echo "            </ul>";
        echo "        </div>";
        echo "    </div>";
    }
}
?>
        </div>
    </div>
</section>

<section class="products-area pt-70 pb-40">
    <div class="container">
        <div class="section-title">
            <h1>Los recién llegados</h1>
        </div>
        <div class="row">
<?php

for ($i = 0; $i < 8; $i++) {
    if ($resultado2[$i]['producto_id']) {

        $id   = $resultado2[$i]['producto_id'];
        $ruta = "fotos/productos/$id.png";

        echo "    <div class='col-lg-3 col-md-4 col-sm-6'>";
        echo "        <div class='single-products-box'>";
        echo "            <div class='image'>";
        echo "                <a href='products-details.html' class='d-block'><img src='$ruta' alt='image'>";
        echo "                </a>";
        echo "                <ul class='buttons-list'>";
        echo "                    <li>";
        echo "                        <a href='#' data-toggle='modal' data-target='#productsQuickView' onclick='leerDatos($id);'>";
        echo "                            <i class='bx bx-search-alt'></i>";
        echo "                            <span class='tooltip-label'>Vista rápida</span>";
        echo "                        </a>";
        echo "                    </li>";
        echo "                </ul>";
        echo "            </div>";
        echo "            <div class='content'>";
        echo "                <h3><a href='products-details.html'>Blood Glucose Meter</a></h3>";
        echo "            </div>";
        echo "        </div>";
        echo "    </div>";
    }
}
?>

        </div>
    </div>
</section>


<!--<section class="products-promotions-area pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-products-promotions-box">
                    <img src="../util/Medishop/html/assets/img/promotions/promotions-img1.jpg" alt="image">
                    <div class="content two">
                        <span class="sub-title">Vaccine</span>
                        <h3><a href="products-grid.html">Get 20% Off on Your Order</a></h3>
                        <a href="products-grid.html" class="link-btn"><i class='bx bx-cart'></i> Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-products-promotions-box">
                    <img src="../util/Medishop/html/assets/img/promotions/promotions-img2.jpg" alt="image">
                    <div class="content">
                        <span class="sub-title">5 Layers Filtration</span>
                        <h3><a href="products-grid.html">Medical Masks Up to 75% Off</a></h3>
                        <a href="products-grid.html" class="link-btn"><i class='bx bx-cart'></i> Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->


<section class="brands-area bg-f9faff pt-70 pb-40">
    <div class="container">
        <div class="section-title">
            <h1 class="bg-f9faff">Nuestros Proveedores</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                <div class="single-brands-item">
                    <a href="products-grid.html" class="d-block"><img src="../util/Medishop/html/assets/img/brands/brands-img1.png"
                                                                      alt="image"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                <div class="single-brands-item">
                    <a href="products-grid.html" class="d-block"><img src="../util/Medishop/html/assets/img/brands/brands-img2.png"
                                                                      alt="image"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                <div class="single-brands-item">
                    <a href="products-grid.html" class="d-block"><img src="../util/Medishop/html/assets/img/brands/brands-img3.png"
                                                                      alt="image"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                <div class="single-brands-item">
                    <a href="products-grid.html" class="d-block"><img src="../util/Medishop/html/assets/img/brands/brands-img4.png"
                                                                      alt="image"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                <div class="single-brands-item">
                    <a href="products-grid.html" class="d-block"><img src="../util/Medishop/html/assets/img/brands/brands-img5.png"
                                                                      alt="image"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                <div class="single-brands-item">
                    <a href="products-grid.html" class="d-block"><img src="../util/Medishop/html/assets/img/brands/brands-img6.png"
                                                                      alt="image"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
<section class="blog-area pt-70 pb-40">
    <div class="container">
        <div class="section-title">
            <h2>Our Blog</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="blog-details.html" class="d-block"><img src="../util/Medishop/html/assets/img/blog/blog-img1.jpg"
                                                                         alt="image"></a>
                    </div>
                    <div class="post-content">
                        <ul class="post-meta align-items-center d-flex">
                            <li>
                                <div class="d-flex align-items-center">
                                    <img src="../util/Medishop/html/assets/img/user1.jpg" alt="image">
                                    <a href="blog-grid.html">Robert Jackson</a>
                                </div>
                            </li>
                            <li>Nov 12, 2021</li>
                        </ul>
                        <h3><a href="blog-details.html">A researcher is conducting research on coronavirus in the
                            lab</a></h3>
                        <a href="blog-details.html" class="link-btn">Read More <i
                                class='bx bxs-chevron-right-circle'></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="blog-details.html" class="d-block"><img src="../util/Medishop/html/assets/img/blog/blog-img2.jpg"
                                                                         alt="image"></a>
                    </div>
                    <div class="post-content">
                        <ul class="post-meta align-items-center d-flex">
                            <li>
                                <div class="d-flex align-items-center">
                                    <img src="../util/Medishop/html/assets/img/user2.jpg" alt="image">
                                    <a href="blog-grid.html">Daniel McLemore</a>
                                </div>
                            </li>
                            <li>Nov 15, 2021</li>
                        </ul>
                        <h3><a href="blog-details.html">You have to wash your hands for 20 seconds to keep yourself
                            free</a></h3>
                        <a href="blog-details.html" class="link-btn">Read More <i
                                class='bx bxs-chevron-right-circle'></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="blog-details.html" class="d-block"><img src="../util/Medishop/html/assets/img/blog/blog-img3.jpg"
                                                                         alt="image"></a>
                    </div>
                    <div class="post-content">
                        <ul class="post-meta align-items-center d-flex">
                            <li>
                                <div class="d-flex align-items-center">
                                    <img src="../util/Medishop/html/assets/img/user3.jpg" alt="image">
                                    <a href="blog-grid.html">Marianne Lugo</a>
                                </div>
                            </li>
                            <li>Nov 10, 2021</li>
                        </ul>
                        <h3><a href="blog-details.html">It is very important to wear proper clothing to keep yourself
                            free</a></h3>
                        <a href="blog-details.html" class="link-btn">Read More <i
                                class='bx bxs-chevron-right-circle'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="newsletter-area ptb-40">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <div class="newsletter-content">
                    <h2>Subscribe to our <span>Newsletter!</span></h2>
                    <form>
                        <input type="text" class="input-newsletter" placeholder="Your email address">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="newsletter-info">
                    <div class="icon">
                        <i class='bx bx-phone-call'></i>
                    </div>
                    <h2>Feel free to call <span><a href="#">+1 514 555-0179</a></span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<?php include_once 'pie.view.php';?>


<div class="modal fade loginModal" id="loginModal" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Login</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Email or Phone</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember-me">
                                <label class="form-check-label" for="remember-me">Remember Me</label>
                            </div>
                            <a href="index.html">Forgot your password?</a>
                        </div>
                    </div>
                    <button type="submit" class="default-btn">Login Now</button>
                </form>
                <span class="dont-account">Don't have an account? <a href="#" data-toggle="modal"
                                                                     data-target="#registerModal">Register Now!</a></span>
            </div>
        </div>
    </div>
</div>


<div class="modal fade registerModal" id="registerModal" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Register</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="show-password">
                                <label class="form-check-label" for="show-password">Show Password</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="default-btn">Create Account</button>
                </form>
                <span class="dont-account">Already have an account? <a href="#" data-toggle="tooltip"
                                                                       data-placement="top"
                                                                       title="Please Close The Register Modal">Login Now!</a></span>
            </div>
        </div>
    </div>
</div>


<div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>
            <div class="modal-body">
                <h3>My Cart (3)</h3>
                <div class="products-cart-content">
                    <div class="products-cart d-flex align-items-center">
                        <div class="products-image">
                            <a href="products-details.html"><img src="../util/Medishop/html/assets/img/products/products-img1.jpg"
                                                                 alt="image"></a>
                        </div>
                        <div class="products-content">
                            <h3><a href="products-details.html">Infrared Thermometer Gun</a></h3>
                            <div class="products-price">
                                <span>1</span>
                                <span>x</span>
                                <span class="price">$69.00</span>
                            </div>
                        </div>
                        <a href="cart.html" class="remove-btn"><i class='bx bx-trash'></i></a>
                    </div>
                    <div class="products-cart d-flex align-items-center">
                        <div class="products-image">
                            <a href="products-details.html"><img src="../util/Medishop/html/assets/img/products/products-img2.jpg"
                                                                 alt="image"></a>
                        </div>
                        <div class="products-content">
                            <h3><a href="products-details.html">Hand Sanitizer Gel</a></h3>
                            <div class="products-price">
                                <span>3</span>
                                <span>x</span>
                                <span class="price">$49.00</span>
                            </div>
                        </div>
                        <a href="cart.html" class="remove-btn"><i class='bx bx-trash'></i></a>
                    </div>
                    <div class="products-cart d-flex align-items-center">
                        <div class="products-image">
                            <a href="products-details.html"><img src="../util/Medishop/html/assets/img/products/products-img3.jpg"
                                                                 alt="image"></a>
                        </div>
                        <div class="products-content">
                            <h3><a href="products-details.html">Coronavirus Vaccine</a></h3>
                            <div class="products-price">
                                <span>2</span>
                                <span>x</span>
                                <span class="price">$150.00</span>
                            </div>
                        </div>
                        <a href="cart.html" class="remove-btn"><i class='bx bx-trash'></i></a>
                    </div>
                </div>
                <div class="products-cart-subtotal">
                    <span>Subtotal</span>
                    <span class="subtotal">$268.00</span>
                </div>
                <div class="products-cart-btn">
                    <a href="checkout.html" class="default-btn">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade productsQuickView" id="productsQuickView" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="products-image">
                        <img id="ruta_producto" src="" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" style="margin-top: -200px;">
                    <div class="products-content">
                        <h3 id="titulo_producto"></h3>

                        <p id="decripcion_producto"></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

<?php include_once 'scripts.view.php';?>
<script src="js/index.js" type="text/javascript"></script>
<!--<script src="js/productos.js" type="text/javascript"></script>-->



</body>
</html>