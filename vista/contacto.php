<!doctype html>
<html lang="zxx">
<head>
    <title>Medishop - Emergency Medical Supply HTML Template</title>
    <?php include_once 'estilos.view.php';?>
<body>

<div class="navbar-area">
    <div class="theme-responsive-nav">
        <div class="container">
            <div class="theme-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'menu_arriba.view.php';?>
    <div class="others-option-for-responsive">
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
    </div>
</div>


<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Contáctanos</h1>
            <ul>
                <li style="font-size: 18px"><a href="index.php">Inicio</a></li>
                <li style="font-size: 18px">Contáctanos</li>
            </ul>
        </div>
    </div>
</section>

<section class="banner-categories-area pt-70 pb-40">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="single-contact-info-box">
                    <div class="icon">
                        <i class="flaticon-placeholder"></i>
                    </div>
                    <h2>Dirección</h2>
                    <p style="font-size: 22px"><a href="#" target="#">3286 Still Pastures Drive Chester, SC 29706</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="single-contact-info-box">
                    <div class="icon">
                        <i class="flaticon-phone-ringing"></i>
                    </div>
                    <h2>Teléfono</h2>
                    <p style="font-size: 22px"><a href="#">Celular: 947129088</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="single-contact-info-box">
                    <div class="icon">
                        <i class="flaticon-email"></i>
                    </div>
                    <h2>Email</h2>
                    <p style="font-size: 22px"><a href="#"><span>ventas.biomasters@gmail.com</span></a></p>
                    <p style="font-size: 22px"><a href="#">Skype: hello.theme</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="single-contact-info-box">
                    <div class="icon">
                        <i class="flaticon-clock"></i>
                    </div>
                    <h2>Horas Laborales</h2>
                    <p style="font-size: 22px">Sunday - Friday</p>
                    <p style="font-size: 22px">8:00AM - 8:00PM</p>
                </div>
            </div>


        </div>
    </div>
</section>


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
                            <a href="products-details.html"><img src="assets/img/products/products-img1.jpg"
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
                            <a href="products-details.html"><img src="assets/img/products/products-img2.jpg"
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
                            <a href="products-details.html"><img src="assets/img/products/products-img3.jpg"
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


<div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="products-image">
                        <img src="assets/img/products/products-img1.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="products-content">
                        <h3><a href="products-details.html">Infrared Thermometer Gun</a></h3>
                        <div class="products-review">
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="products-details.html" class="rating-count">(3 reviews)</a>
                        </div>
                        <div class="price">
                            <span>$69.00</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <div class="products-add-to-cart">
                            <div class="quantities">
                                <span class="sub-title">Quantities:</span>
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>
                            </div>
                            <button type="submit" class="default-btn"><i class="flaticon-trolley"></i> Add to Cart
                            </button>
                        </div>
                        <a href="#" class="add-to-wishlist"><i class='bx bx-heart'></i> Add to Wishlist</a>
                        <ul class="social-share">
                            <li><span>Share:</span></li>
                            <li><a href="#" target="#"><i class='bx bxl-facebook-square'></i></a></li>
                            <li><a href="#" target="#"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#" target="#"><i class='bx bxl-instagram-alt'></i></a></li>
                            <li><a href="#" target="#"><i class='bx bxl-linkedin-square'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

<?php include_once 'scripts.view.php';?>
</body>
</html>
