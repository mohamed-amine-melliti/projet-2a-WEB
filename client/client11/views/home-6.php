<!doctype html>
<html class="no-js" lang="zxx">
<?php
 session_start();


 ?>


<!-- Mirrored from demo.devitems.com/pander-v3/home-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 08:48:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home-6 || Pander Furniture Ecommerce Bootstrap 4 Template</title>
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
        <!-- Newsletter Popup Start -->
        <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off">Close</span>
                <div class="subscribe_area text-center mt-40">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Volga mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class="subscribe-form-group subscribe-form-style-four">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Popup End -->
        <!-- Main Header Area Start Here -->
        <header class="header-style-two header-style-four">
            <!-- Header Top Start Here -->
            <div class="header-top green-bg">
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
                                    <li><a href="login.php">se connecter</a></li>
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

            <div class="header-middle dark-white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Categorie Search Box Start Here -->
                        <div class="col-xl-3 col-lg-4 col-md-4 order-3 order-lg-1">
                            <div class="categorie-search-box">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search entire store here...">
                                    <button><span class="pe-7s-search"></span></button>
                                </form>
                            </div>
                        </div>
                        <!-- Categorie Search Box End Here -->
                        <!-- Logo Start -->
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 order-1 order-lg-2">
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
                                                       <li>Subtotal <span>DT57.95</span></li>
                                                       <li>Shipping <span>DT7.00</span></li>
                                                       <li>Taxes <span>DT0.00</span></li>
                                                       <li>Total <span>DT64.95</span></li>
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
                     <?php 
if(isset($_SESSION['client']['username']))
        {
           
                         

        ?>
                    <div class="mobile-menu d-block d-lg-none">
                        <nav>
                            <ul>
                                <li><a href="home-6.php">home</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul>
                                   
                                        <li><a href="home-6.php">Home</a></li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                                <li><a href="#">furniture</a>
                                    <!-- Men Accessories Dropdown Start -->
                                    <ul class="submobile-mega-dropdown">
                                        <li><a href="#">living</a>
                                            <!-- Watches Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">sofa set</a></li>
                                              
                                            </ul>
                                            <!-- Watches Dropdown End -->
                                        </li>
                                        <li><a href="#">bedroom</a>
                                            <!-- Shoes Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">bed room sofa</a></li>
                                             
                                            </ul>
                                            <!-- Shoes Dropdown End -->
                                        </li>
                                        <li><a href="#">dining</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">Dining set</a></li>
                                              
                                            </ul>
                                            <!-- Bags Dropdown End -->
                                        </li>
                                        <li><a href="#">office</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">meeting table</a></li>
                                           
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
                                                <li><a href="shop.html">Cords and Cables</a></li>
                                                <li><a href="shop.html">gps accessories</a></li>
                                                <li><a href="shop.html">Microphones</a></li>
                                                <li><a href="shop.html">Wireless Transmitters</a></li>
                                            </ul>
                                        </li>
                                        <!-- Dress Dropdown End -->
                                        <!-- shoes Dropdown Start -->
                                        <li><a href="#">wall</a>
                                            <ul>
                                                <li><a href="shop.html">Bathroom Lighting</a></li>
                                                <li><a href="shop.html">Wall Torchieres</a></li>
                                                <li><a href="shop.html">Picture Lights</a></li>
                                                <li><a href="shop.html">Pharmacy - Wall</a></li>
                                            </ul>
                                        </li>
                                        <!-- shoes Dropdown End -->
                                        <!-- Bags Dropdown Start -->
                                        <li><a href="#">outdoor</a>
                                            <ul>
                                                <li><a href="shop.html">ceiling mount</a></li>
                                                <li><a href="shop.html">Fountains</a></li>
                                                <li><a href="shop.html">Gas Lanterns</a></li>
                                                <li><a href="shop.html">Hanging</a></li>
                                            </ul>
                                        </li>
                                        <!-- Bags Dropdown End -->
                                        <!-- swimwear Dropdown Start -->
                                        <li><a href="#">decor</a>
                                            <ul>
                                                <li><a href="shop.html">mirrors</a></li>
                                                <li><a href="shop.html">clocks</a></li>
                                                <li><a href="shop.html">coat racks</a></li>
                                                <li><a href="shop.html">plumbing</a></li>
                                            </ul>
                                        </li>
                                        <!-- swimwear Dropdown End -->
                                    </ul>
                                    <!-- Women Accessories Dropdown Start -->
                                </li>
                                <li><a href="#">shop</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
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
                                        <li><a href="register.php">register</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="forgot-password.html">forgot password</a></li>
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
            <div class="header-bottom white-bg header-sticky d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <nav>
                                <ul class="header-bottom-list d-flex">
                                    <li class="active"><a class="drop-icon" href="home-6.php">home</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                      
                                            <li><a href="home-6.php">Home</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.html">furniture</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu big-megamneu">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">living</li>
                                                    <li><a href="shop.html">sofa</a></li>
                                                  
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">bedroom</li>
                                                    <li><a href="shop.html">bed room sofa</a></li>
                                                
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Dining</li>
                                               
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">office</li>
                                                    <li><a href="shop.html">meeting table</a></li>
                                        
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->

                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.html">lighting</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu big-megamneu">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">lamp</li>
                                                    <li><a href="shop.html">Cords and Cables</a></li>
                                         
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">wall</li>
                                                    <li><a href="shop.html">Bathroom Lighting</a></li>
                                         
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">outdoor</li>
                                               
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">decor</li>
                                                    <li><a href="shop.html">mirrors</a></li>
                                          
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->

                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.html">room</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-three">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Large Appliances</li>
                                                    <li><a href="shop.html">Armchairs</a></li>
                                    
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Medium Appliances</li>
                                                    <li><a href="shop.html">Bootees Bags</a></li>
                                                  
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Small Appliances</li>
                                                    <li><a href="shop.html">Bootees Bags</a></li>
                                                
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.html">new collections</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-two">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Large Appliances</li>
                                                    <li><a href="shop.html">Armchairs</a></li>
                                            
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Small Appliances</li>
                                                    <li><a href="shop.html">Bootees Bags</a></li>
                                          
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->

                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.html">shop</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="shop.html">Shop</a></li>
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
                                            <li><a href="register.php">register</a></li>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="forgot-password.html">forgot password</a></li>
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


            <?php 

           }
           else{
           ?>
                           <div class="mobile-menu d-block d-lg-none">
                        <nav>
                            <ul>
                                <li><a href="home-6.php">home</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul>
                                   
                                        <li><a href="home-6.php">Home</a></li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                                <li><a href="#">furniture</a>
                                    <!-- Men Accessories Dropdown Start -->
                                    <ul class="submobile-mega-dropdown">
                                        <li><a href="#">living</a>
                                            <!-- Watches Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">sofa set</a></li>
                                              
                                            </ul>
                                            <!-- Watches Dropdown End -->
                                        </li>
                                        <li><a href="#">bedroom</a>
                                            <!-- Shoes Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">bed room sofa</a></li>
                                             
                                            </ul>
                                            <!-- Shoes Dropdown End -->
                                        </li>
                                        <li><a href="#">dining</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">Dining set</a></li>
                                              
                                            </ul>
                                            <!-- Bags Dropdown End -->
                                        </li>
                                        <li><a href="#">office</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">meeting table</a></li>
                                           
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
                                                <li><a href="shop.html">Cords and Cables</a></li>
                                                <li><a href="shop.html">gps accessories</a></li>
                                                <li><a href="shop.html">Microphones</a></li>
                                                <li><a href="shop.html">Wireless Transmitters</a></li>
                                            </ul>
                                        </li>
                                        <!-- Dress Dropdown End -->
                                        <!-- shoes Dropdown Start -->
                                        <li><a href="#">wall</a>
                                            <ul>
                                                <li><a href="shop.html">Bathroom Lighting</a></li>
                                                <li><a href="shop.html">Wall Torchieres</a></li>
                                                <li><a href="shop.html">Picture Lights</a></li>
                                                <li><a href="shop.html">Pharmacy - Wall</a></li>
                                            </ul>
                                        </li>
                                        <!-- shoes Dropdown End -->
                                        <!-- Bags Dropdown Start -->
                                        <li><a href="#">outdoor</a>
                                            <ul>
                                                <li><a href="shop.html">ceiling mount</a></li>
                                                <li><a href="shop.html">Fountains</a></li>
                                                <li><a href="shop.html">Gas Lanterns</a></li>
                                                <li><a href="shop.html">Hanging</a></li>
                                            </ul>
                                        </li>
                                        <!-- Bags Dropdown End -->
                                        <!-- swimwear Dropdown Start -->
                                        <li><a href="#">decor</a>
                                            <ul>
                                                <li><a href="shop.html">mirrors</a></li>
                                                <li><a href="shop.html">clocks</a></li>
                                                <li><a href="shop.html">coat racks</a></li>
                                                <li><a href="shop.html">plumbing</a></li>
                                            </ul>
                                        </li>
                                        <!-- swimwear Dropdown End -->
                                    </ul>
                                    <!-- Women Accessories Dropdown Start -->
                                </li>
                                <li><a href="#">shop</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
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
                                        <li><a href="register.php">register</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="forgot-password.html">forgot password</a></li>
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
            <div class="header-bottom white-bg header-sticky d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <nav>
                                <ul class="header-bottom-list d-flex">
                                    <li class="active"><a class="drop-icon" href="home-6.php">home</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                      
                                            <li><a href="home-6.php">Home</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.html">furniture</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu big-megamneu">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">living</li>
                                                    <li><a href="shop.html">sofa</a></li>
                                                  
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">bedroom</li>
                                                    <li><a href="shop.html">bed room sofa</a></li>
                                                
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Dining</li>
                                               
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">office</li>
                                                    <li><a href="shop.html">meeting table</a></li>
                                        
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->

                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.html">lighting</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu big-megamneu">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">lamp</li>
                                                    <li><a href="shop.html">Cords and Cables</a></li>
                                         
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">wall</li>
                                                    <li><a href="shop.html">Bathroom Lighting</a></li>
                                         
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">outdoor</li>
                                               
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">decor</li>
                                                    <li><a href="shop.html">mirrors</a></li>
                                          
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->

                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.html">room</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-three">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Large Appliances</li>
                                                    <li><a href="shop.html">Armchairs</a></li>
                                    
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Medium Appliances</li>
                                                    <li><a href="shop.html">Bootees Bags</a></li>
                                                  
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Small Appliances</li>
                                                    <li><a href="shop.html">Bootees Bags</a></li>
                                                
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.html">new collections</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-two">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Large Appliances</li>
                                                    <li><a href="shop.html">Armchairs</a></li>
                                            
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Small Appliances</li>
                                                    <li><a href="shop.html">Bootees Bags</a></li>
                                          
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->

                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a class="drop-icon" href="shop.html">shop</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="shop.html">Shop</a></li>
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
                                            <li><a href="register.php">register</a></li>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="forgot-password.html">forgot password</a></li>
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


 <?php 
                                }

                             ?>

            <!-- Header Bottom End Here -->
        </header>
        <!-- Main Header Area End Here -->
        <!-- Slider Area Start -->
        <div class="slider-area slider-style-three slider-style-four text-center">
            <!-- Slider Area Start Here -->
            <div class="slider-activation owl-carousel">
                <!-- Start Single Slide -->
                <div class="slide align-center-left fullscreen  animation-style-01 bg-image-12">
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slider-content">
                                    <h1>best selling sofa sets</h1>
                                    <h2>sale up to 70% off</h2>
                                    <div class="slide-btn">
                                        <a href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide align-center-left fullscreen animation-style-02 bg-image-13">
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slider-content">
                                    <h1>living room at home</h1>
                                    <h2>sale up to 60% off</h2>
                                    <div class="slide-btn">
                                        <a href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
            <!-- Slider Area End Here -->
        </div>
        <!-- Slider Area End -->
        <!-- Slider Under Banner Section Start -->
        <div class="banner-area pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 mb-sm-30">
                        <div class="single-banner zoom">
                            <a href="shop.html"><img src="img/banner/b8.jpg" alt="banner-img"></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 mb-sm-30">
                        <div class="single-banner zoom">
                            <a href="shop.html"><img src="img/banner/b9.jpg" alt="banner-img"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner zoom">
                            <a href="shop.html"><img src="img/banner/b10.jpg" alt="banner-img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Under Banner Section End -->
        <!-- New Arrival Products Start Here -->
        <div class="new-arrival new-arrival-style-three no-border-style ptb-90">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2>Category products</h2>
                    <p>Browse the collection of our products and top interresting products.ll definitely find what you are looking for.</p>
                </div>
                <!-- Section Title End -->
                <div class="our-pro-active owl-carousel">
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="img/products/p1.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <div class="quick-view-pro">
                                    <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="product-details.html">Chaz Kangeroo Hoodie</a></h4>
                                <p><span class="price">45.50 DT</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="compare.html" data-toggle="tooltip" data-original-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="img/products/p2.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <span class="sticker-sale">-5%</span>
                                <div class="quick-view-pro">
                                    <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="product-details.html">Sprite Yoga Straps1</a></h4>
                                <p><span class="price">65.00 DT</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="compare.html" data-toggle="tooltip" data-original-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    <!-- New Arrival Dual Products End Here -->
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="img/products/p3.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <div class="quick-view-pro">
                                    <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="product-details.html">Voyage Yoga Bag</a></h4>
                                <p><span class="price">DT61.21</span><span class="prev-price">64.50 DT</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="compare.html" data-toggle="tooltip" data-original-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="img/products/p4.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <span class="sticker-sale">-5%</span>
                                <div class="quick-view-pro">
                                    <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="product-details.html">Fusion Backpack</a></h4>
                                <p><span class="price">72.50 DT</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="compare.html" data-toggle="tooltip" data-original-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    <!-- New Arrival Dual Products End Here -->
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="img/products/p8.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <span class="sticker-sale">-5%</span>
                                <div class="quick-view-pro">
                                    <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="product-details.html">Impulse Duffle</a></h4>
                                <p><span class="price">45.50 DT</span><span class="prev-price">30.50 DT</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="compare.html" data-toggle="tooltip" data-original-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="img/products/p6.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <span class="sticker-sale">-5%</span>
                                <div class="quick-view-pro">
                                    <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="product-details.html">Field Messenger</a></h4>
                                <p><span class="price">55.50 DT</span><span class="prev-price">59.50 DT</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="compare.html" data-toggle="tooltip" data-original-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    <!-- New Arrival Dual Products End Here -->
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="img/products/p11.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <span class="sticker-sale">-5%</span>
                                <div class="quick-view-pro">
                                    <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="product-details.html">Impulse Duffle</a></h4>
                                <p><span class="price">DT45.50</span><span class="prev-price">DT30.50</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="compare.html" data-toggle="tooltip" data-original-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="img/products/p8.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <span class="sticker-sale">-5%</span>
                                <div class="quick-view-pro">
                                    <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="product-details.html">Field Messenger</a></h4>
                                <p><span class="price">55.50 DT</span><span class="prev-price">59.50 DT</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="compare.html" data-toggle="tooltip" data-original-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    <!-- New Arrival Dual Products End Here -->
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="img/products/p1.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <span class="sticker-sale">-5%</span>
                                <div class="quick-view-pro">
                                    <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="product-details.html">Impulse Duffle</a></h4>
                                <p><span class="price">45.50 DT</span><span class="prev-price">30.50 DT</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="compare.html" data-toggle="tooltip" data-original-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="img/products/p9.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <span class="sticker-sale">-5%</span>
                                <div class="quick-view-pro">
                                    <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="product-details.html">Field Messenger</a></h4>
                                <p><span class="price">55.50 DT</span><span class="prev-price">59.50 DT</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="compare.html" data-toggle="tooltip" data-original-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    <!-- New Arrival Dual Products End Here -->
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="img/products/p5.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <span class="sticker-sale">-5%</span>
                                <div class="quick-view-pro">
                                    <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="product-details.html">Impulse Duffle</a></h4>
                                <p><span class="price">45.50 DT</span><span class="prev-price">30.50 DT</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="compare.html" data-toggle="tooltip" data-original-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="product-details.html"><img src="img/products/p6.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <span class="sticker-sale">-5%</span>
                                <div class="quick-view-pro">
                                    <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="product-details.html">Field Messenger</a></h4>
                                <p><span class="price">55.50 DT</span><span class="prev-price">59.50 DT</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="compare.html" data-toggle="tooltip" data-original-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    <!-- New Arrival Dual Products End Here -->
                </div>
            </div>
        </div>
        <!-- New Arrival Products End Here -->
        <!-- New Product Banner Start Here -->
        <div class="product-bannner bg-image-3 ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-sm-30">
                        <div class="single-banner zoom">
                            <a href="shop.html"><img src="img/banner/b11.jpg" alt="banner-img"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-banner zoom">
                            <a href="shop.html"><img src="img/banner/b12.jpg" alt="banner-img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Banner End Here -->
        <!-- Best Selling Area Start Here -->
        <div class="best-selling-pro deal-pro-style-one deal-pro-style-two pt-90">
            <div class="container">
                <div class="best-selling-inner">
                    <div class="row">
                        <div class="col-lg-8">
                           
                            <div class="deal-products-active owl-carousel">
                                <!-- Single Products Start Here -->
                                <div class="single-product single-deal-products">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="deal-pro-content text-lg-right">
                                                <h4><a href="#">Strive Shoulder Pack</a></h4>
                                                <div class="pro-price">
                                                    <div class="main-price">
                                                        <span class="price">DT30.00</span>
                                                        <span class="prev-price">DT40.00</span>
                                                    </div>
                                                    <div class="discount-price">
                                                        <span>-6%</span>
                                                    </div>
                                                </div>
                                                <p>Convenience is next to nothing when your day is crammed with action. So whether you're heading to class, gym, or the unbeaten path, make sure you've..</p>
                                                <div class="countdown" data-countdown="2020/01/01"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-deal-img">
                                                <a href="#"><img src="img/products/p6.jpg" alt="product-img"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Products End Here -->
                                <!-- Single Products Start Here -->
                                <div class="single-product single-deal-products">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="deal-pro-content text-lg-right">
                                                <h4><a href="#">Crown Summit Backpack</a></h4>
                                                <div class="pro-price">
                                                    <div class="main-price">
                                                        <span class="price">25.00 DT</span>
                                                        <span class="prev-price">22.00 DT</span>
                                                    </div>
                                                    <div class="discount-price">
                                                        <span>-3%</span>
                                                    </div>
                                                </div>
                                                <p>Convenience is next to nothing when your day is crammed with action. So whether you're heading to class, gym, or the unbeaten path, make sure you've..</p>
                                                <div class="countdown" data-countdown="2019/02/01"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-deal-img">
                                                <a href="#"><img src="img/products/p5.jpg" alt="product-img"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Products End Here -->
                                <!-- Single Products Start Here -->
                                <div class="single-product single-deal-products">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="deal-pro-content text-lg-right">
                                                <h4><a href="#">Wayfarer Messenger Bag</a></h4>
                                                <div class="pro-price">
                                                    <div class="main-price">
                                                        <span class="price">48.00 DT</span>
                                                        <span class="prev-price">40.00 DT</span>
                                                    </div>
                                                    <div class="discount-price">
                                                        <span>-5%</span>
                                                    </div>
                                                </div>
                                                <p>Convenience is next to nothing when your day is crammed with action. So whether you're heading to class, gym, or the unbeaten path, make sure you've..</p>
                                                <div class="countdown" data-countdown="2019/03/01"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-deal-img">
                                                <a href="#"><img src="img/products/p8.jpg" alt="product-img"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Products End Here -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="best-selling-active best-selling-active-style-two best-selling-active-style-three owl-carousel">
                                <!-- Dual Product Start Here -->
                                <div class="best-dual-pro">
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="img/products/p7.jpg" alt="product-img"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Sprite Yoga Straps1</a></h4>
                                            <p><span class="price">45.50 DT</span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="img/products/p6.jpg" alt="product-img"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Chaz Kangeroo Hoodie </a></h4>
                                            <p><span class="price">65.00 DT</span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                </div>
                                <!-- Dual Product End Here -->
                                <!-- Dual Product Start Here -->
                                <div class="best-dual-pro">
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="img/products/p5.jpg" alt="product-img"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Fusion Backpack</a></h4>
                                            <p><span class="price">61.21 DT</span><span class="prev-price">64.50 DT</span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="img/products/p4.jpg" alt="product-img"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Voyage Yoga Bag </a></h4>
                                            <p><span class="price">72.50 DT </span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                </div>
                                <!-- Dual Product End Here -->
                                <!-- Dual Product Start Here -->
                                <div class="best-dual-pro">
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="img/products/p3.jpg" alt="product-img"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Chaz Kangeroo Hoodie </a></h4>
                                            <p><span class="price">61.21 DT</span><span class="prev-price">64.50 DT</span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img src="img/products/p7.jpg" alt="product-img"></a>
                                        </div>
                                        <div class="pro-content">
                                            <h4 class="pro-title"><a href="product-details.html">Sprite Yoga Straps1 </a></h4>
                                            <p><span class="price">55.50 DT </span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                </div>
                                <!-- Dual Product End Here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Best Selling Area End Here -->
        <!-- Testmonial Start Here -->
        <div class="testmonial testmonial-style-three bg-image-5 ptb-100 bg-opacity-black-50">
            <div class="cotainer">
                <div class="testmonial-active owl-carousel">
                    <!-- Single Slide Testmonial Start -->
                    <div class="single-testmonial text-center">
                        <div class="testmonial-img"></div>
                        <div class="testmonial-content">
                            <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</p>
                            <div class="info">
                               <p><a href="#" class="name">Stefano</a><span class="user">User</span></p>
                            </div>    
                        </div>
                    </div>
                    <!-- Single Slide Testmonial End -->
                    <!-- Single Slide Testmonial Start -->
                    <div class="single-testmonial text-center">
                        <div class="testmonial-img"></div>
                        <div class="testmonial-content">
                            <p>I'm so happy with all of the themes, great support, could not wish for more. These people are geniuses ! Kudo's from the Netherlands !</p>
                           <div class="info">
                               <p><a href="#" class="name">Sandy Wilcke</a><span class="user">User</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Slide Testmonial End -->
                </div>
            </div>
        </div>
        <!-- Testmonial End Here -->
        <!-- Blog Area Start Here -->
        <div class="blog-area blog-style-three ptb-90">
            <div class="container">
                <div class="main-blog-area">
                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <h2>Recent blog</h2>
                        <p>Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem</p>
                    </div>
                    <!-- Section Title End -->
                    <!-- Blog Activation Start -->
                    <div class="blog-activation owl-carousel">
                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="blog-details.htmll"><img src="img/blog/blg1.jpg" alt="blog-img"></a>
                                <div class="entry-meta">
                                    <div class="date">
                                        <p>17</p>
                                        <span>dec</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">The History and the Hype</a></h4>
                                <ul class="meta-box">
                                    <li class="meta-date"><span><i class="fa fa-calendar" aria-hidden="true"></i>dec 17, 2018</span></li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">By pander</a></li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since ...</p>
                                <a href="blog-details.html" class="blg-readmore">Read More</a>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="single-blog.html"><img src="img/blog/blg2.jpg" alt="blog-img"></a>
                                <div class="entry-meta">
                                    <div class="entry-meta">
                                    <div class="date">
                                        <p>8</p>
                                        <span>dec</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">Hooker Furniture Corporation</a></h4>
                                <ul class="meta-box">
                                    <li class="meta-date"><span><i class="fa fa-calendar" aria-hidden="true"></i>dec 8, 2018</span></li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">By pander</a></li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since ...</p>
                                <a href="blog-details.html" class="blg-readmore">Read More</a>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="single-blog.html"><img src="img/blog/blg3.jpg" alt="blog-img"></a>
                                <div class="entry-meta">
                                    <div class="entry-meta">
                                    <div class="date">
                                        <p>14</p>
                                        <span>dec</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">Etiam eros massa</a></h4>
                                <ul class="meta-box">
                                    <li class="meta-date"><span><i class="fa fa-calendar" aria-hidden="true"></i>dec 14, 2018</span></li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">By pander</a></li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since ...</p>
                                <a href="blog-details.html" class="blg-readmore">Read More</a>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="single-blog.html"><img src="img/blog/blg1.jpg" alt="blog-img"></a>
                                <div class="entry-meta">
                                   <div class="entry-meta">
                                    <div class="date">
                                        <p>13</p>
                                        <span>dec</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">The History and the Hype</a></h4>
                                <ul class="meta-box">
                                    <li class="meta-date"><span><i class="fa fa-calendar" aria-hidden="true"></i>dec 13, 2018</span></li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">By pander</a></li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since ...</p>
                                <a href="blog-details.html" class="blg-readmore">Read More</a>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                    <!-- Blog Activation End -->
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Blog Area End Here -->
        <!-- Social Link Area Start -->
        <div class="social-link-area social-link-style-three dark-white-bg ptb-55">
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
        <!-- Newsletter Area Start -->
        <div class="newsletter newsletter-style-two green-bg ptb-30">
            <div class="container">
                <div class="row align-items-center">
                     <div class="col-xl-6 col-lg-6">
                         <div class="main-news-desc mb-all-15">
                             <div class="news-desc">
                                 <h3>Sign Up For Newsletters</h3>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-6 col-lg-6">
                         <div class="newsletter-box">
                             <form action="#">
                                  <input class="subscribe" placeholder="your email address" name="email" id="subscribe" type="text">
                                  <button type="submit" class="submit">subscribe!</button>
                             </form>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Area End -->
        <!-- Footer Area Start Here -->
        <footer class="black-bg footer-style-three pb-35">
            <div class="container">
                <!-- Footer Top Start -->
                
                <!-- Footer Top End -->
                <!-- Footer Middle Start -->
                
                <!-- Footer Middle End -->
                <!-- Footer Bottom Start -->
                <div class="footer-bottom pt-35">
                    <div class="col-md-12">
                        <div class="row justify-content-md-between justify-content-center footer-bottom-content">
                            <div class="footer-copyright mb-sm-15">
                                <p>Your Store Copyright Here. </p>
                                <p>Powered By Pander template</p>
                            </div>
                            <div class="footer-payment">
                                <a href="#"><img src="img/payment/payment.png" alt="payment-img" class="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom End -->
            </div>
        </footer>
        <!-- Footer Area End Here -->
        <!-- Quick View Content Start -->
        <div class="main-product-thumbnail quick-thumb-content">
            <div class="container">
                <!-- The Modal -->
                <div class="modal fade" id="product-window">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <!-- Main Thumbnail Image Start -->
                                    <div class="col-lg-6 col-md-6 mb-all-40">
                                        <!-- Thumbnail Large Image start -->
                                        <div class="tab-content">
                                            <div id="pro-1" class="tab-pane fade show active">
                                                <a data-fancybox="images" href="img/products/p2.jpg"><img src="img/products/p2.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="pro-2" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/products/p5.jpg"><img src="img/products/p5.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="pro-3" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/products/p3.jpg"><img src="img/products/p3.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="pro-4" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/products/p7.jpg"><img src="img/products/p7.jpg" alt="product-view"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Large Image End -->
                                        <!-- Thumbnail Image End -->
                                        <div class="product-thumbnail">
                                            <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                               <a class="active" data-toggle="tab" href="#pro-1"><img src="img/thumbnail/t1.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#pro-2"><img src="img/thumbnail/t2.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#pro-3"><img src="img/thumbnail/t3.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#pro-4"><img src="img/thumbnail/t4.jpg" alt="product-thumbnail"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail image end -->
                                    </div>
                                    <!-- Main Thumbnail Image End -->
                                    <!-- Thumbnail Description Start -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="thubnail-desc fix">
                                            <h3 class="product-header">Faded Short Sleeves T-shirt</h3>
                                            <ul class="rating-summary">
                                                <li class="rating-pro">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="read-review"><a href="#">read reviews (1)</a></li>
                                                <li class="write-review"><a href="#">write review</a></li>
                                            </ul>
                                            <div class="pro-thumb-price mt-10">
                                                <p class="d-flex align-items-center"><span class="prev-price">16.51</span><span class="price">15.19 DT</span><span class="saving-price">-5%</span></p>
                                            </div>
                                            <p class="pro-desc-details">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                            <div class="product-size mtb-30 clearfix">
                                                <label>Size</label>
                                                <select class="">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="color clearfix mb-30">
                                                <label>color</label>
                                                <ul class="color-list">
                                                   <li>
                                                        <a class="white" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="orange active" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="paste" href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="quatity-stock">
                                               <label>Quantity</label>
                                                <ul class="d-flex flex-wrap  align-items-center">
                                                    <li class="box-quantity">
                                                        <form action="#">
                                                            <input class="quantity" type="number" min="1" value="1">
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="pro-cart">add to cart</button>
                                                    </li>
                                                    <li class="pro-ref">
                                                        <p><span class="in-stock"><i class="ion-checkmark-round"></i> in stock</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="social-sharing mt-30">
                                                <ul>
                                                    <li><label>share</label></li>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Description End -->
                                </div>
                            </div>
                            <!-- Modal footer -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick View Content End -->
    </div>
    <!-- Main Wrapper End Here -->

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


<!-- Mirrored from demo.devitems.com/pander-v3/home-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 08:48:42 GMT -->
</html>