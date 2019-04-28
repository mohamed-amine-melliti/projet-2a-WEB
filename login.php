<!doctype html>
<html class="no-js" lang="zxx">
<?php
 session_start();


 ?>

<!-- Mirrored from demo.devitems.com/pander-v3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 08:48:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login || Pander Furniture Ecommerce Bootstrap 4 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
     <!-- Animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- 7-stroke fonts css -->
    <link rel="stylesheet" href="css/pe-icon-7-stroke.min.css">
    <!-- Ionicons fonts css -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
        <!-- Main Header Area Start Here -->
        <header>
            <!-- Header Top Start Here -->
            <div class="header-top off-white-bg">
                <div class="container">
                    <div class="col-sm-12">
                        <div class="row justify-content-md-between justify-content-center">
                            <!-- Header Top Left Start -->
                            <?php 
if(isset($_SESSION['client']['username']))
        {
           
                         

        ?>
                            <div class="header-top-left">
                                <ul>
                                    <li><a href="#"><img src="img/header/1.jpg" alt="language-selector">English<i class="fa fa-angle-down"></i></a>
                                        <!-- Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="#"><img src="img/header/1.jpg" alt="language-selector">English</a></li>
                                            <li><a href="#"><img src="img/header/2.jpg" alt="language-selector">Francis</a></li>
                                        </ul>
                                        <!-- Dropdown End -->
                                    </li>
                                    <li><a href="#">USD $<i class="fa fa-angle-down"></i></a>
                                        <!-- Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Français</a></li>
                                        </ul>
                                        <!-- Dropdown End -->
                                    </li>
                                </ul>
                            </div>
                            <!-- Header Top Left End -->
                            <!-- Header Top Right Start -->
                            <div class="header-top-right">
                                <ul>
                                    <li><a href="#">Mon compte<i class="fa fa-angle-down"></i></a>
                                         <!-- Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="compare.html">comparer les produits</a></li>
                                            <li><a href="account.php">Mon compte</a></li>
                                            <li><a href="wishlist.html">Ma liste d'envies</a></li>
                                            <form method="POST" action="logout_Controller.php">
                                            <li>
                                            <button type="submit" class="login-btn">Déconnexion</button>
                                            </li>
                                            </form>
                                        </ul>
                                        <!-- Dropdown End -->
                                    </li>
                                    <li><?php echo $_SESSION['client']['username'] ?></li>
                                </ul>
                            </div>


<?php 

                            }
                            else{
                                ?>  
                                <div class="header-top-left">
                                <ul>
                                    <li><a href="#"><img src="img/header/1.jpg" alt="language-selector">English<i class="fa fa-angle-down"></i></a>
                                        <!-- Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="#"><img src="img/header/1.jpg" alt="language-selector">English</a></li>
                                            <li><a href="#"><img src="img/header/2.jpg" alt="language-selector">Francis</a></li>
                                        </ul>
                                        <!-- Dropdown End -->
                                    </li>
                                    <li><a href="#">USD $<i class="fa fa-angle-down"></i></a>
                                        <!-- Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Français</a></li>
                                        </ul>
                                        <!-- Dropdown End -->
                                    </li>
                                </ul>
                            </div>
                            <!-- Header Top Left End -->
                            <!-- Header Top Right Start -->
                            <div class="header-top-right">
                                <ul>
                                         <!-- Dropdown Start -->
                                        <!-- Dropdown End -->
                                    </li>
                                    <li><a href="login.html">se connecter</a></li>
                                    <li><a href="register.php">créer un compte</a></li>
                                </ul>
                            </div>
                            <?php 
                                }

                             ?>

                           
                            <!-- Header Top Right End -->
                        </div>
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End Here -->
            <!-- Header Middle Start Here -->
<?php 
if(isset($_SESSION['client']['username']))
        {
           
                         

        ?>
            <div class="header-middle white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Categorie Search Box Start Here -->
                        <div class="col-xl-3 col-lg-4 col-md-12 order-3 order-lg-1">
                            <div class="categorie-search-box">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search entire store here...">
                                    <button><span class="pe-7s-search"></span></button>
                                </form>
                            </div>
                        </div>
                        <!-- Categorie Search Box End Here -->
                        <!-- Logo Start -->
                        <div class="col-xl-6 col-lg-4 col-md-5 col-sm-12 order-1 order-lg-2">
                            <div class="logo text-lg-center text-md-left mt-sm-35 text-center">
                                <a href="home-6.php"><img src="img/logo/logo.png" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Logo End -->
                        <!-- Cart Box Start Here -->
                        <div class="col-xl-3 col-lg-4 col-md-5  col-sm-7 order-2 order-lg-3">
                            <div class="cart-box">
                                <ul class="d-flex justify-content-sm-between  align-items-center">
                                   <li>
                                       <ul class="wish-compare-items">
                                           <li><a class="wishlist" href="wishlist.html">my wishlist</a></li>
                                           <li><a class="compare" href="compare.html">my compare</a></li>
                                       </ul>
                                   </li>
                                    <li><a href="#"><img src="img/vertical-menu/icon_cart.png" alt="cart-icon"><span class="total-pro">2</span><span class="my-cart"><span>my cart</span></span></a>
                                        <ul class="ht-dropdown cart-box-width">
                                            <li>
                                                <!-- Cart Box Start -->
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="img/products/p1.jpg" alt="cart-image"></a>
                                                        <span class="pro-quantity">1X</span>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="product.html">Printed Summer Red </a></h6>
                                                        <span class="cart-price">27.45</span>
                                                        <span>Size: S</span>
                                                        <span>Color: Yellow</span>
                                                    </div>
                                                    <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                                </div>
                                                <!-- Cart Box End -->
                                                <!-- Cart Box Start -->
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="img/products/p2.jpg" alt="cart-image"></a>
                                                        <span class="pro-quantity">1X</span>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="product.html">Printed Round Neck</a></h6>
                                                        <span class="cart-price">45.00</span>
                                                        <span>Size: XL</span>
                                                        <span>Color: Green</span>
                                                    </div>
                                                    <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                                </div>
                                                <!-- Cart Box End -->
                                                <!-- Cart Footer Inner Start -->
                                                <div class="cart-footer">
                                                   <ul class="price-content">
                                                       <li>Subtotal <span>$57.95</span></li>
                                                       <li>Shipping <span>$7.00</span></li>
                                                       <li>Taxes <span>$0.00</span></li>
                                                       <li>Total <span>$64.95</span></li>
                                                   </ul>
                                                    <div class="cart-actions text-center">
                                                        <a class="cart-checkout" href="checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                                <!-- Cart Footer Inner End -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cart Box End Here -->
                    </div>
                    <!-- Row End -->
                    <!-- Mobile Menu Start Here -->
                    <div class="mobile-menu d-block d-lg-none">
                        <nav>
                            <ul>
                                <li><a href="home-6.php">home</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul>
                              
                                        <li><a href="home-6.php">Home  </a></li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                                <li><a href="#">furniture</a>
                                    <!-- Men Accessories Dropdown Start -->
                                    <ul class="submobile-mega-dropdown">
                                        <li><a href="#">living</a>
                                            <!-- Watches Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.php">sofa set</a></li>
                                                <li><a href="shop.php">corner table</a></li>
                                                <li><a href="shop.php">center table</a></li>
                                                <li><a href="shop.php">tv cabine</a></li>
                                            </ul>
                                            <!-- Watches Dropdown End -->
                                        </li>
                                        <li><a href="#">bedroom</a>
                                            <!-- Shoes Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.php">bed room sofa</a></li>
                                                <li><a href="shop.php">bed drawer</a></li>
                                                <li><a href="shop.php">bed side table</a></li>
                                                <li><a href="shop.php">dressing table</a></li>
                                            </ul>
                                            <!-- Shoes Dropdown End -->
                                        </li>
                                        <li><a href="#">dining</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.php">Dining set</a></li>
                                                <li><a href="shop.php">chair</a></li>
                                                <li><a href="shop.php">showcase</a></li>
                                                <li><a href="shop.php">dinner wagon</a></li>
                                            </ul>
                                            <!-- Bags Dropdown End -->
                                        </li>
                                        <li><a href="#">office</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.php">meeting table</a></li>
                                                <li><a href="shop.php">conference table</a></li>
                                                <li><a href="shop.php">mobile drawer</a></li>
                                                <li><a href="shop.php">group chair</a></li>
                                            </ul>
                                            <!-- Bags Dropdown End -->
                                        </li>
                                    </ul>
                                    <!-- Men Accessories Dropdown End -->
                                </li>
                                <li><a href="#">lighting</a>
                                    <!-- Women Accessories Dropdown Start -->
                                    <ul class="submobile-mega-dropdown">
                                        <!-- Dress Dropdown Start -->
                                        <li><a href="#">lamp</a>
                                            <ul>
                                                <li><a href="shop.php">Cords and Cables</a></li>
                                                <li><a href="shop.php">gps accessories</a></li>
                                                <li><a href="shop.php">Microphones</a></li>
                                                <li><a href="shop.php">Wireless Transmitters</a></li>
                                            </ul>
                                        </li>
                                        <!-- Dress Dropdown End -->
                                        <!-- shoes Dropdown Start -->
                                        <li><a href="#">wall</a>
                                            <ul>
                                                <li><a href="shop.php">Bathroom Lighting</a></li>
                                                <li><a href="shop.php">Wall Torchieres</a></li>
                                                <li><a href="shop.php">Picture Lights</a></li>
                                                <li><a href="shop.php">Pharmacy - Wall</a></li>
                                            </ul>
                                        </li>
                                        <!-- shoes Dropdown End -->
                                        <!-- Bags Dropdown Start -->
                                        <li><a href="#">outdoor</a>
                                            <ul>
                                                <li><a href="shop.php">ceiling mount</a></li>
                                                <li><a href="shop.php">Fountains</a></li>
                                                <li><a href="shop.php">Gas Lanterns</a></li>
                                                <li><a href="shop.php">Hanging</a></li>
                                            </ul>
                                        </li>
                                        <!-- Bags Dropdown End -->
                                        <!-- swimwear Dropdown Start -->
                                        <li><a href="#">decor</a>
                                            <ul>
                                                <li><a href="shop.php">mirrors</a></li>
                                                <li><a href="shop.php">clocks</a></li>
                                                <li><a href="shop.php">coat racks</a></li>
                                                <li><a href="shop.php">plumbing</a></li>
                                            </ul>
                                        </li>
                                        <!-- swimwear Dropdown End -->
                                    </ul>
                                    <!-- Women Accessories Dropdown Start -->
                                </li>
                                <li><a href="#">shop</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="product-details.html">product details</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="#">Blog</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="blog.html">3 column</a></li>
                                        <li><a href="blog-3-column-fullwidth.html">3 column full width</a></li>
                                        <li><a href="blog-4-column-fullwidth.html">4 column full width</a></li>
                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details Right Sidebar</a></li>
                                        
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="#">pages</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="account.php">My account</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="forgot-password.php">forgot password</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="contact.php">contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Mobile Menu End Here -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Middle End Here -->
            <!-- Header Bottom Start Here -->
            <div class="header-bottom black-bg header-sticky d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <nav>
                                <ul class="header-bottom-list d-flex">
                                    <li class="active"><a class="drop-icon" href="home-6.php">home</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                          
                                            <li><a href="home-6.php">Home </a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.php">furniture</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu big-megamneu">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">living</li>
                                                    <li><a href="shop.php">sofa set</a></li>
                                                    <li><a href="shop.php">corner table</a></li>
                                                    <li><a href="shop.php">center table</a></li>
                                                    <li><a href="shop.php">tv cabine</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">bedroom</li>
                                                    <li><a href="shop.php">bed room sofa</a></li>
                                                    <li><a href="shop.php">bed drawer</a></li>
                                                    <li><a href="shop.php">bed side table</a></li>
                                                    <li><a href="shop.php">dressing table</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Dining</li>
                                                    <li><a href="shop.php">Dining set</a></li>
                                                    <li><a href="shop.php">chair</a></li>
                                                    <li><a href="shop.php">showcase</a></li>
                                                    <li><a href="shop.php">dinner wagon</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">office</li>
                                                    <li><a href="shop.php">meeting table</a></li>
                                                    <li><a href="shop.php">conference table</a></li>
                                                    <li><a href="shop.php">mobile drawer</a></li>
                                                    <li><a href="shop.php">group chair</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->

                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.php">lighting</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu big-megamneu">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">lamp</li>
                                                    <li><a href="shop.php">Cords and Cables</a></li>
                                                    <li><a href="shop.php">gps accessories</a></li>
                                                    <li><a href="shop.php">Microphones</a></li>
                                                    <li><a href="shop.php">Wireless Transmitters</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">wall</li>
                                                    <li><a href="shop.php">Bathroom Lighting</a></li>
                                                    <li><a href="shop.php">Wall Torchieres</a></li>
                                                    <li><a href="shop.php">Picture Lights</a></li>
                                                    <li><a href="shop.php">Pharmacy - Wall</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">outdoor</li>
                                                    <li><a href="shop.php">ceiling mount</a></li>
                                                    <li><a href="shop.php">Fountains</a></li>
                                                    <li><a href="shop.php">Gas Lanterns</a></li>
                                                    <li><a href="shop.php">Hanging</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">decor</li>
                                                    <li><a href="shop.php">mirrors</a></li>
                                                    <li><a href="shop.php">clocks</a></li>
                                                    <li><a href="shop.php">coat racks</a></li>
                                                    <li><a href="shop.php">plumbing</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->

                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.php">room</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-three">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Large Appliances</li>
                                                    <li><a href="shop.php">Armchairs</a></li>
                                                    <li><a href="shop.php">Bunk Bed</a></li>
                                                    <li><a href="shop.php">Mattress</a></li>
                                                    <li><a href="shop.php">Sideboard</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Medium Appliances</li>
                                                    <li><a href="shop.php">Bootees Bags</a></li>
                                                    <li><a href="shop.php">Jackets</a></li>
                                                    <li><a href="shop.php">Shelf</a></li>
                                                    <li><a href="shop.php">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Small Appliances</li>
                                                    <li><a href="shop.php">Bootees Bags</a></li>
                                                    <li><a href="shop.php">Jackets</a></li>
                                                    <li><a href="shop.php">Shelf</a></li>
                                                    <li><a href="shop.php">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.php">new collections</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-two">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Large Appliances</li>
                                                    <li><a href="shop.php">Armchairs</a></li>
                                                    <li><a href="shop.php">Bunk Bed</a></li>
                                                    <li><a href="shop.php">Mattress</a></li>
                                                    <li><a href="shop.php">Sideboard</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Small Appliances</li>
                                                    <li><a href="shop.php">Bootees Bags</a></li>
                                                    <li><a href="shop.php">Jackets</a></li>
                                                    <li><a href="shop.php">Shelf</a></li>
                                                    <li><a href="shop.php">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->

                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.php">shop</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="shop.php">Shop</a></li>
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="compare.html">compare</a></li>
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a class="drop-icon" href="blog.html">blog</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown blog-dropdown">
                                            <li><a href="blog.html">3 column</a></li>
                                            <li><a href="blog-3-column-fullwidth.html">3 column full width</a></li>
                                            <li><a href="blog-4-column-fullwidth.html">4 column full width</a></li>
                                            <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details Right Sidebar</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a class="drop-icon" href="#">pages</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="contact.php">contact us</a></li>
                                            <li><a href="about.html">about us</a></li>
                                            <li><a href="register.html">register</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="forgot-password.php">forgot password</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Bottom End Here -->
        </header>
              <?php 

                            }
                            else{
                                ?>
                                            <div class="header-middle white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Categorie Search Box Start Here -->
                        <div class="col-xl-3 col-lg-4 col-md-12 order-3 order-lg-1">
                            <div class="categorie-search-box">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search entire store here...">
                                    <button><span class="pe-7s-search"></span></button>
                                </form>
                            </div>
                        </div>
                        <!-- Categorie Search Box End Here -->
                        <!-- Logo Start -->
                        <div class="col-xl-6 col-lg-4 col-md-5 col-sm-12 order-1 order-lg-2">
                            <div class="logo text-lg-center text-md-left mt-sm-35 text-center">
                                <a href="home-6.php"><img src="img/logo/logo.png" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Logo End -->
                        <!-- Cart Box Start Here -->
                        <div class="col-xl-3 col-lg-4 col-md-5  col-sm-7 order-2 order-lg-3">
                            <div class="cart-box">
                                <ul class="d-flex justify-content-sm-between  align-items-center">
                                   <li>
                                       <ul class="wish-compare-items">
                                           <li><a class="wishlist" href="wishlist.html">my wishlist</a></li>
                                           <li><a class="compare" href="compare.html">my compare</a></li>
                                       </ul>
                                   </li>
                                    <li><a href="#"><img src="img/vertical-menu/icon_cart.png" alt="cart-icon"><span class="total-pro">2</span><span class="my-cart"><span>my cart</span></span></a>
                                        <ul class="ht-dropdown cart-box-width">
                                            <li>
                                                <!-- Cart Box Start -->
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="img/products/p1.jpg" alt="cart-image"></a>
                                                        <span class="pro-quantity">1X</span>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="product.html">Printed Summer Red </a></h6>
                                                        <span class="cart-price">27.45</span>
                                                        <span>Size: S</span>
                                                        <span>Color: Yellow</span>
                                                    </div>
                                                    <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                                </div>
                                                <!-- Cart Box End -->
                                                <!-- Cart Box Start -->
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="img/products/p2.jpg" alt="cart-image"></a>
                                                        <span class="pro-quantity">1X</span>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="product.html">Printed Round Neck</a></h6>
                                                        <span class="cart-price">45.00</span>
                                                        <span>Size: XL</span>
                                                        <span>Color: Green</span>
                                                    </div>
                                                    <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                                </div>
                                                <!-- Cart Box End -->
                                                <!-- Cart Footer Inner Start -->
                                                <div class="cart-footer">
                                                   <ul class="price-content">
                                                       <li>Subtotal <span>$57.95</span></li>
                                                       <li>Shipping <span>$7.00</span></li>
                                                       <li>Taxes <span>$0.00</span></li>
                                                       <li>Total <span>$64.95</span></li>
                                                   </ul>
                                                    <div class="cart-actions text-center">
                                                        <a class="cart-checkout" href="checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                                <!-- Cart Footer Inner End -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cart Box End Here -->
                    </div>
                    <!-- Row End -->
                    <!-- Mobile Menu Start Here -->
                    <div class="mobile-menu d-block d-lg-none">
                        <nav>
                            <ul>
                                <li><a href="home-6.php">home</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul>
                              >
                                        <li><a href="home-6.php">Home  </a></li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                                <li><a href="#">furniture</a>
                                    <!-- Men Accessories Dropdown Start -->
                                    <ul class="submobile-mega-dropdown">
                                        <li><a href="#">living</a>
                                            <!-- Watches Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.php">sofa set</a></li>
                                                <li><a href="shop.php">corner table</a></li>
                                                <li><a href="shop.php">center table</a></li>
                                                <li><a href="shop.php">tv cabine</a></li>
                                            </ul>
                                            <!-- Watches Dropdown End -->
                                        </li>
                                        <li><a href="#">bedroom</a>
                                            <!-- Shoes Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.php">bed room sofa</a></li>
                                                <li><a href="shop.php">bed drawer</a></li>
                                                <li><a href="shop.php">bed side table</a></li>
                                                <li><a href="shop.php">dressing table</a></li>
                                            </ul>
                                            <!-- Shoes Dropdown End -->
                                        </li>
                                        <li><a href="#">dining</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.php">Dining set</a></li>
                                                <li><a href="shop.php">chair</a></li>
                                                <li><a href="shop.php">showcase</a></li>
                                                <li><a href="shop.php">dinner wagon</a></li>
                                            </ul>
                                            <!-- Bags Dropdown End -->
                                        </li>
                                        <li><a href="#">office</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.php">meeting table</a></li>
                                                <li><a href="shop.php">conference table</a></li>
                                                <li><a href="shop.php">mobile drawer</a></li>
                                                <li><a href="shop.php">group chair</a></li>
                                            </ul>
                                            <!-- Bags Dropdown End -->
                                        </li>
                                    </ul>
                                    <!-- Men Accessories Dropdown End -->
                                </li>
                                <li><a href="#">lighting</a>
                                    <!-- Women Accessories Dropdown Start -->
                                    <ul class="submobile-mega-dropdown">
                                        <!-- Dress Dropdown Start -->
                                        <li><a href="#">lamp</a>
                                            <ul>
                                                <li><a href="shop.php">Cords and Cables</a></li>
                                                <li><a href="shop.php">gps accessories</a></li>
                                                <li><a href="shop.php">Microphones</a></li>
                                                <li><a href="shop.php">Wireless Transmitters</a></li>
                                            </ul>
                                        </li>
                                        <!-- Dress Dropdown End -->
                                        <!-- shoes Dropdown Start -->
                                        <li><a href="#">wall</a>
                                            <ul>
                                                <li><a href="shop.php">Bathroom Lighting</a></li>
                                                <li><a href="shop.php">Wall Torchieres</a></li>
                                                <li><a href="shop.php">Picture Lights</a></li>
                                                <li><a href="shop.php">Pharmacy - Wall</a></li>
                                            </ul>
                                        </li>
                                        <!-- shoes Dropdown End -->
                                        <!-- Bags Dropdown Start -->
                                        <li><a href="#">outdoor</a>
                                            <ul>
                                                <li><a href="shop.php">ceiling mount</a></li>
                                                <li><a href="shop.php">Fountains</a></li>
                                                <li><a href="shop.php">Gas Lanterns</a></li>
                                                <li><a href="shop.php">Hanging</a></li>
                                            </ul>
                                        </li>
                                        <!-- Bags Dropdown End -->
                                        <!-- swimwear Dropdown Start -->
                                        <li><a href="#">decor</a>
                                            <ul>
                                                <li><a href="shop.php">mirrors</a></li>
                                                <li><a href="shop.php">clocks</a></li>
                                                <li><a href="shop.php">coat racks</a></li>
                                                <li><a href="shop.php">plumbing</a></li>
                                            </ul>
                                        </li>
                                        <!-- swimwear Dropdown End -->
                                    </ul>
                                    <!-- Women Accessories Dropdown Start -->
                                </li>
                                <li><a href="#">shop</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="product-details.html">product details</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="#">Blog</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="blog.html">3 column</a></li>
                                        <li><a href="blog-3-column-fullwidth.html">3 column full width</a></li>
                                        <li><a href="blog-4-column-fullwidth.html">4 column full width</a></li>
                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details Right Sidebar</a></li>
                                        
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="#">pages</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="account.php">My account</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="forgot-password.php">forgot password</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Mobile Menu End Here -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Middle End Here -->
            <!-- Header Bottom Start Here -->
            <div class="header-bottom black-bg header-sticky d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <nav>
                                <ul class="header-bottom-list d-flex">
                                    <li class="active"><a class="drop-icon" href="home-6.php">home</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                          
                                            <li><a href="home-6.php">Home </a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.php">furniture</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu big-megamneu">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">living</li>
                                                    <li><a href="shop.php">sofa set</a></li>
                                                    <li><a href="shop.php">corner table</a></li>
                                                    <li><a href="shop.php">center table</a></li>
                                                    <li><a href="shop.php">tv cabine</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">bedroom</li>
                                                    <li><a href="shop.php">bed room sofa</a></li>
                                                    <li><a href="shop.php">bed drawer</a></li>
                                                    <li><a href="shop.php">bed side table</a></li>
                                                    <li><a href="shop.php">dressing table</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Dining</li>
                                                    <li><a href="shop.php">Dining set</a></li>
                                                    <li><a href="shop.php">chair</a></li>
                                                    <li><a href="shop.php">showcase</a></li>
                                                    <li><a href="shop.php">dinner wagon</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">office</li>
                                                    <li><a href="shop.php">meeting table</a></li>
                                                    <li><a href="shop.php">conference table</a></li>
                                                    <li><a href="shop.php">mobile drawer</a></li>
                                                    <li><a href="shop.php">group chair</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->

                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.php">lighting</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu big-megamneu">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">lamp</li>
                                                    <li><a href="shop.php">Cords and Cables</a></li>
                                                    <li><a href="shop.php">gps accessories</a></li>
                                                    <li><a href="shop.php">Microphones</a></li>
                                                    <li><a href="shop.php">Wireless Transmitters</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">wall</li>
                                                    <li><a href="shop.php">Bathroom Lighting</a></li>
                                                    <li><a href="shop.php">Wall Torchieres</a></li>
                                                    <li><a href="shop.php">Picture Lights</a></li>
                                                    <li><a href="shop.php">Pharmacy - Wall</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">outdoor</li>
                                                    <li><a href="shop.php">ceiling mount</a></li>
                                                    <li><a href="shop.php">Fountains</a></li>
                                                    <li><a href="shop.php">Gas Lanterns</a></li>
                                                    <li><a href="shop.php">Hanging</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">decor</li>
                                                    <li><a href="shop.php">mirrors</a></li>
                                                    <li><a href="shop.php">clocks</a></li>
                                                    <li><a href="shop.php">coat racks</a></li>
                                                    <li><a href="shop.php">plumbing</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->

                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.php">room</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-three">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Large Appliances</li>
                                                    <li><a href="shop.php">Armchairs</a></li>
                                                    <li><a href="shop.php">Bunk Bed</a></li>
                                                    <li><a href="shop.php">Mattress</a></li>
                                                    <li><a href="shop.php">Sideboard</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Medium Appliances</li>
                                                    <li><a href="shop.php">Bootees Bags</a></li>
                                                    <li><a href="shop.php">Jackets</a></li>
                                                    <li><a href="shop.php">Shelf</a></li>
                                                    <li><a href="shop.php">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Small Appliances</li>
                                                    <li><a href="shop.php">Bootees Bags</a></li>
                                                    <li><a href="shop.php">Jackets</a></li>
                                                    <li><a href="shop.php">Shelf</a></li>
                                                    <li><a href="shop.php">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.php">new collections</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-two">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Large Appliances</li>
                                                    <li><a href="shop.php">Armchairs</a></li>
                                                    <li><a href="shop.php">Bunk Bed</a></li>
                                                    <li><a href="shop.php">Mattress</a></li>
                                                    <li><a href="shop.php">Sideboard</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Small Appliances</li>
                                                    <li><a href="shop.php">Bootees Bags</a></li>
                                                    <li><a href="shop.php">Jackets</a></li>
                                                    <li><a href="shop.php">Shelf</a></li>
                                                    <li><a href="shop.php">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->

                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.php">shop</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="shop.php">Shop</a></li>
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="compare.html">compare</a></li>
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a class="drop-icon" href="blog.html">blog</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown blog-dropdown">
                                            <li><a href="blog.html">3 column</a></li>
                                            <li><a href="blog-3-column-fullwidth.html">3 column full width</a></li>
                                            <li><a href="blog-4-column-fullwidth.html">4 column full width</a></li>
                                            <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details Right Sidebar</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a class="drop-icon" href="#">pages</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="about.html">about us</a></li>
                                            <li><a href="register.html">register</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="forgot-password.php">forgot password</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Bottom End Here -->
        </header>


                                    <?php 
                                }

                             ?> 

        <!-- Main Header Area End Here -->
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="home-6.php">Home</a></li>
                    <li class="breadcrumb-item active">login</li>
                </ol>
            </div>
        </div>

        <!-- Breadcrumb Area End Here -->
        <!-- Login Page Start Here -->
        <div class="login ptb-90">
            <div class="container">
              <h3 class="login-header">Log in to your account </h3>
               <div class="row">
                   <div class="col-xl-6 col-lg-8 offset-xl-3 offset-lg-2">
                        <div class="login-form">
                            <form method="POST" action="login_Controller.php">
                                <div class="form-group row">
                                    <label for="l-name" class="col-sm-3 col-form-label">Nom d'utilisateur</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="username" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-7">
                                   <button class="btn show-btn" id="eye" type="button">montrer</button>
                                        
                                        <input type="password" id="pwd" placeholder="Password" name="password" class="form-control" required="" >
                                       
                                        
                                         
                                    </div>
                                </div>
                                <script>
    var pwd=document.getElementById('pwd');
    var  eye =document.getElementById('eye');
 

 eye.addEventListener('click',togglePass);
 function togglePass(){
    eye.classList.toggle('active');

    (pwd.type == 'password') ? pwd.type ='text' :
    pwd.type = 'password';
 }


</script>
                                <div class="login-details text-center mb-25">
                                    <a href="forgot-password.php">Forgot your password? </a>
                                    <button type="submit" class="login-btn">Sign in</button>
                                </div>
                                <div class="login-footer text-center">
                                    <p>No account? <a href="register.php">Create one here</a></p>
                                </div>
                            </form>
                        </div>
                   </div>
               </div>
            </div>
        </div>
        <!-- Login Page End Here -->
        <!-- Social Link Area Start -->
        <div class="social-link-area dark-white-bg ptb-55">
            <div class="container">
                <div class="row">
                     <div class="col-lg-6 mb-all-40">
                         <div class="twitter-post">
                             <h3 class="social-title">Latest Tweets</h3>
                             <div class="twitter-content">
                                <div class="twitter-user"><a href="#">Example themes Club</a> <a href="#">@demothemes</a></div>
                                <div class="twitter-desc">
                                    <p>Check out "pander - Furniture ecommerce #HTML #Template" <br> on #Envato by <a href="#">@exampletheme</a> #Themeforest <a href="#">you twitter link </a><br><span class="tweet-time"><a href="#">23 Sep</a></span></p>
                                </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="social-share">
                            <h3 class="social-title">Stay Connected</h3>
                            <ul class="social-share-list">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Social Link Area End -->
        <!-- Footer Area Start Here -->
        <footer class="black-bg pb-35">
           
    <!-- jquery 3.3.1 -->
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Countdown js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- Mobile menu js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- ScrollUp js -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- Fancybox js -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- Jquery nice select js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- Jquery ui price slider js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Bootstrap popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin js -->
    <script src="js/plugins.js"></script>
    <!-- Main activaion js -->
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from demo.devitems.com/pander-v3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 08:48:39 GMT -->
</html>