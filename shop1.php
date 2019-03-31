<?PHP
				include "../../core/ProduitC.php";
				$Produit1C=new ProduitC();
				$listeProduits=$Produit1C->afficherProduits1();
				?>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.devitems.com/pander-v3/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 08:48:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop || Pander Furniture Ecommerce Bootstrap 4 Template</title>
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
                                    <li><a href="#">USD DT<i class="fa fa-angle-down"></i></a>
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
                                    <li><a href="#">My Account<i class="fa fa-angle-down"></i></a>
                                         <!-- Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li><a href="compare.html">compare products</a></li>
                                            <li><a href="account.html">my account</a></li>
                                            <li><a href="wishlist.html">my wishlist</a></li>
                                            <li><a href="login.html">sign in</a></li>
                                        </ul>
                                        <!-- Dropdown End -->
                                    </li>
                                    <li><a href="register.html">create an account</a></li>
                                </ul>
                            </div>
                            <!-- Header Top Right End -->
                        </div>
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End Here -->
            <!-- Header Middle Start Here -->
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
                                <a href="index.html"><img src="img/logo/logo.png" alt="logo-image"></a>
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
                    <div class="mobile-menu d-block d-lg-none">
                        <nav>
                            <ul>
                                <li><a href="index.html">home</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul>
                              
                                        <li><a href="home-6.html">Home </a></li>
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
                                                <li><a href="shop.html">corner table</a></li>
                                                <li><a href="shop.html">center table</a></li>
                                                <li><a href="shop.html">tv cabine</a></li>
                                            </ul>
                                            <!-- Watches Dropdown End -->
                                        </li>
                                        <li><a href="#">bedroom</a>
                                            <!-- Shoes Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">bed room sofa</a></li>
                                                <li><a href="shop.html">bed drawer</a></li>
                                                <li><a href="shop.html">bed side table</a></li>
                                                <li><a href="shop.html">dressing table</a></li>
                                            </ul>
                                            <!-- Shoes Dropdown End -->
                                        </li>
                                        <li><a href="#">dining</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">Dining set</a></li>
                                                <li><a href="shop.html">chair</a></li>
                                                <li><a href="shop.html">showcase</a></li>
                                                <li><a href="shop.html">dinner wagon</a></li>
                                            </ul>
                                            <!-- Bags Dropdown End -->
                                        </li>
                                        <li><a href="#">office</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">meeting table</a></li>
                                                <li><a href="shop.html">conference table</a></li>
                                                <li><a href="shop.html">mobile drawer</a></li>
                                                <li><a href="shop.html">group chair</a></li>
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
                                        <li><a href="account.html">My account</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="forgot-password.html">forgot password</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="contact.html">contact us</a></li>
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
                                    <li class="active"><a class="drop-icon" href="index.html">home</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                   
                                            <li><a href="home-6.html">Home Version 6</a></li>
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
                                                    <li><a href="shop.html">sofa set</a></li>
                                                    <li><a href="shop.html">corner table</a></li>
                                                    <li><a href="shop.html">center table</a></li>
                                                    <li><a href="shop.html">tv cabine</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">bedroom</li>
                                                    <li><a href="shop.html">bed room sofa</a></li>
                                                    <li><a href="shop.html">bed drawer</a></li>
                                                    <li><a href="shop.html">bed side table</a></li>
                                                    <li><a href="shop.html">dressing table</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Dining</li>
                                                    <li><a href="shop.html">Dining set</a></li>
                                                    <li><a href="shop.html">chair</a></li>
                                                    <li><a href="shop.html">showcase</a></li>
                                                    <li><a href="shop.html">dinner wagon</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">office</li>
                                                    <li><a href="shop.html">meeting table</a></li>
                                                    <li><a href="shop.html">conference table</a></li>
                                                    <li><a href="shop.html">mobile drawer</a></li>
                                                    <li><a href="shop.html">group chair</a></li>
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
                                                    <li><a href="shop.html">gps accessories</a></li>
                                                    <li><a href="shop.html">Microphones</a></li>
                                                    <li><a href="shop.html">Wireless Transmitters</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">wall</li>
                                                    <li><a href="shop.html">Bathroom Lighting</a></li>
                                                    <li><a href="shop.html">Wall Torchieres</a></li>
                                                    <li><a href="shop.html">Picture Lights</a></li>
                                                    <li><a href="shop.html">Pharmacy - Wall</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">outdoor</li>
                                                    <li><a href="shop.html">ceiling mount</a></li>
                                                    <li><a href="shop.html">Fountains</a></li>
                                                    <li><a href="shop.html">Gas Lanterns</a></li>
                                                    <li><a href="shop.html">Hanging</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">decor</li>
                                                    <li><a href="shop.html">mirrors</a></li>
                                                    <li><a href="shop.html">clocks</a></li>
                                                    <li><a href="shop.html">coat racks</a></li>
                                                    <li><a href="shop.html">plumbing</a></li>
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
                                                    <li><a href="shop.html">Bunk Bed</a></li>
                                                    <li><a href="shop.html">Mattress</a></li>
                                                    <li><a href="shop.html">Sideboard</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Medium Appliances</li>
                                                    <li><a href="shop.html">Bootees Bags</a></li>
                                                    <li><a href="shop.html">Jackets</a></li>
                                                    <li><a href="shop.html">Shelf</a></li>
                                                    <li><a href="shop.html">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Small Appliances</li>
                                                    <li><a href="shop.html">Bootees Bags</a></li>
                                                    <li><a href="shop.html">Jackets</a></li>
                                                    <li><a href="shop.html">Shelf</a></li>
                                                    <li><a href="shop.html">Shoes</a></li>
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
                                                    <li><a href="shop.html">Bunk Bed</a></li>
                                                    <li><a href="shop.html">Mattress</a></li>
                                                    <li><a href="shop.html">Sideboard</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Small Appliances</li>
                                                    <li><a href="shop.html">Bootees Bags</a></li>
                                                    <li><a href="shop.html">Jackets</a></li>
                                                    <li><a href="shop.html">Shelf</a></li>
                                                    <li><a href="shop.html">Shoes</a></li>
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
                                            <li><a href="contact.html">contact us</a></li>
                                            <li><a href="about.html">about us</a></li>
                                            <li><a href="register.html">register</a></li>
                                            <li><a href="login.html">Login</a></li>
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
            <!-- Header Bottom End Here -->
        </header>
        <!-- Main Header Area End Here -->
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Shop Page Start -->
        <div class="main-shop-page white-bg ptb-90">
            <div class="container">
                <!-- Row End -->
                <div class="row">
                    <!-- Sidebar Shopping Option Start -->
                    <div class="col-lg-3 order-2 order-lg-1 mt-all-40">
                        <div class="sidebar">
                            <!-- Price Filter Options Start -->
                            <div class="search-filter mb-30">
                                <h3 class="sidebar-title">filter by price</h3>
                                <form action="#" class="slider-sidebar">
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" class="amount-range" readonly>
                                </form>
                            </div>
                           

                        
                            <!-- Price Filter Options End -->
                            <!-- Sidebar Categorie Start -->
                            <form method="POST" >										
                            <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">categories</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" name="myCheck" type="checkbox" onclick="shop.php" >
                                        <label class="form-check-label" for="camera"> Anbouba</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="GamePad" type="checkbox">
                                        <label class="form-check-label" for="GamePad">GamePad (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Digital" type="checkbox">
                                        <label class="form-check-label" for="Digital">Digital Cameras (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Virtual" type="checkbox">
                                        <label class="form-check-label" for="Virtual"> Virtual Reality (8) </label>
                                    </li>
                                </ul>
                            </div>
                            </form>
                            
                            <!-- Sidebar Categorie Start -->
                            <!-- Product Size Start -->
                            <div class="size mb-30">
                                <h3 class="sidebar-title">size</h3>
                                <ul class="size-list sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="small" type="checkbox">
                                        <label class="form-check-label" for="small">S (6)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="medium" type="checkbox">
                                        <label class="form-check-label" for="medium">M (9)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="large" type="checkbox">
                                        <label class="form-check-label" for="large">L (8)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Size End -->
                            <!-- Product Color Start -->
                            <div class="color mb-30">
                                <h3 class="sidebar-title">color</h3>
                                <ul class="color-option sidbar-style">
                                    <li>
                                        <span class="white"></span>
                                        <a href="#">white (4)</a>
                                    </li>
                                    <li>
                                        <span class="orange"></span>
                                        <a href="#">Orange (2)</a>
                                    </li>
                                    <li>
                                        <span class="blue"></span>
                                        <a href="#">Blue (6)</a>
                                    </li>
                                    <li>
                                        <span class="yellow"></span>
                                        <a href="#">Yellow (8)</a>
                                    </li>
                                    <li>
                                        <span class="black"></span>
                                        <a href="#">black (6)</a>
                                    </li>
                                    <li>
                                        <span class="biege"></span>
                                        <a href="#">biege (2)</a>
                                    </li>
                                    <li>
                                        <span class="green"></span>
                                        <a href="#">green (11)</a>
                                    </li>
                                    <li>
                                        <span class="pink"></span>
                                        <a href="#">pink (8)</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Color End -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">Components</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">cotton (4)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">polyester (4)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">Viscose (5)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">Styles</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">casual (5)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">dressy (2)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">girly (8)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                             <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie">
                                <h3 class="sidebar-title">Properties</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">colorful dress (2)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">maxi dress (2)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">midi dress (2)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">short dress (4) </label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">short sleve (3) </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                        </div>
                        <!-- Single Banner Start -->
                        <div class="sidebar-banner mt-30">
                            <a href="shop.html"><img class="ful" src="img/banner/b14.jpg" alt="slider-banner"></a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <!-- Sidebar Shopping Option End -->
                    <!-- Product Categorie List Start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                       <div class="shop-banner mb-40">
                           <a href="shop.html"><img src="img/banner/b18.jpg" alt="banner-img"></a>
                       </div>
                        <!-- Grid & List View Start -->
                        <div class="list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                            <div class="active list-view d-flex align-items-center  mb-sm-15">
                                <ul class="nav tabs-area d-flex align-items-center">
                                    <li><a  data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                                </ul>
                                <span class="show-items"></span>
                            </div>
                            <!-- Toolbar Short Area Start -->
   
                            <!-- Toolbar Short Area End -->
                        </div>






                        <div id="list-view" class="tab-pane">
                        <?PHP
foreach($listeProduits as $col){
?>
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="DProduit.php?idproduit=<?PHP echo $col['idproduit']; ?>"><?PHP echo "<img src='images/".$col['image']."' >"; ?></a>
                                            <div class="quick-view-pro">
                                                <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"></a>
                                            </div>
                                        </div>

                                        <td>
                                        <div class="pro-content">
                                           
                                            <h4 class="pro-title"><a href="DProduit.php?idproduit=<?PHP echo $col['idproduit']; ?>"><?PHP echo $col['nomproduit']; ?></a></h4>
                                            <p><span class="price"><?PHP echo $col['prix']; ?> DT</span></p>
                                            <p> <?PHP echo $col['description']; ?></p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-original-title="Add to Cart">Add To Cart</a>
                                                </div>
                                             
                                            </div>

                                        </div>
                                        
                                    </div>
                                    <?PHP
}
?>



    






                        <!-- Shop Breadcrumb Area Start -->
                        <div class="shop-breadcrumb-area border-default mt-40">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-5">
                                    <span class="show-items">Showing 1-12 of 13 item(s) </span>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-7">
                                    <ul class="pfolio-breadcrumb-list text-center">
                                        <li class="float-left prev"><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li class="float-right next"><a href="#">Next<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Breadcrumb Area End -->
                    </div>
                    <!-- product Categorie List End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Shop Page End -->
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


<!-- Mirrored from demo.devitems.com/pander-v3/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 08:48:43 GMT -->
</html>