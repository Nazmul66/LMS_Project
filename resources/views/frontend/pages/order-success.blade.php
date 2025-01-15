<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Order Success</title>

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/assets/css/vendors/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/assets/css/vendors/remixicon.css') }}">

    <!-- Slick slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/assets/css/vendors/slick.css') }}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/assets/css/vendors/animate.css') }}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/assets/css/vendors/themify-icons.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/assets/css/vendors/bootstrap.css') }}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/assets/css/style.css') }}">

    <!-- toaster css plugin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body class="theme-color-1">


    {{-- <!-- header start -->
    <header>
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Our store Multikart</li>
                                <li><i class="ri-phone-fill"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#!"><i class="ri-heart-fill"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account"> <i class="ri-user-fill"></i> My Account
                                <ul class="onhover-show-div">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar">
                                <a href="#!" onclick="openNav()">
                                    <div class="bar-style">
                                        <i class="ri-bar-chart-horizontal-line sidebar-bar"></i>
                                    </div>
                                </a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="#!" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <div onclick="closeNav()">
                                            <div class="sidebar-back text-start">
                                                <i class="ri-arrow-left-s-line"></i> Back
                                            </div>
                                        </div>
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                            <li>
                                                <a href="#!">clothing</a>
                                                <ul class="mega-menu clothing-menu">
                                                    <li>
                                                        <div class="row m-0">
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <h5>women's fashion</h5>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#!">dresses</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">skirts</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">western wear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">ethic wear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">sport wear</a>
                                                                        </li>
                                                                    </ul>
                                                                    <h5>men's fashion</h5>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#!">sports wear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">western wear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">ethic wear</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <h5>accessories</h5>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#!">fashion jewellery</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">caps and hats</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">precious jewellery</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">necklaces</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">earrings</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">wrist wear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">ties</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">cufflinks</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#!">pockets squares</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <a href="#!" class="mega-menu-banner">
                                                                    <img src="../assets/images/mega-menu/fashion.jpg"
                                                                        alt="" class="img-fluid blur-up lazyload">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#!">bags</a>
                                                <ul>
                                                    <li>
                                                        <a href="#!">shopper bags</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">laptop bags</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">clutches</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">clutches</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#!">purses</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">wallets</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">leathers</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">satchels</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#!">bags</a>
                                                <ul>
                                                    <li>
                                                        <a href="#!">shopper bags</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">laptop bags</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">clutches</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">purses</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#!">purses</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">wallets</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">leathers</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">satchels</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#!">bags</a>
                                                <ul>
                                                    <li>
                                                        <a href="#!">shopper bags</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">laptop bags</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">clutches</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">purses</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#!">purses</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">wallets</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">leathers</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">satchels</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#!">footwear</a>
                                                <ul>
                                                    <li>
                                                        <a href="#!">sport shoes</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">formal shoes</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">casual shoes</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#!">watches</a>
                                            </li>
                                            <li>
                                                <a href="#!">Accessories</a>
                                                <ul>
                                                    <li>
                                                        <a href="#!">fashion jewellery</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">caps and hats</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">precious jewellery</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">more..</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#!">necklaces</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">earrings</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">wrist wear</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">accessories</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#!">ties</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#!">cufflinks</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#!">pockets squares</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#!">helmets</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#!">scarves</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#!">more...</a>
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#!">accessory gift sets</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#!">travel accessories</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#!">phone cases</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#!">belts & more</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">wearable</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#!">house of design</a>
                                            </li>
                                            <li>
                                                <a href="#!">beauty & personal care</a>
                                                <ul>
                                                    <li>
                                                        <a href="#!">makeup</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">skincare</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">premium beauty</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">more</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#!">fragrances</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">luxury beauty</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">hair care</a>
                                                            </li>
                                                            <li>
                                                                <a href="#!">tools & brushes</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#!">home & decor</a>
                                            </li>
                                            <li>
                                                <a href="#!">kitchen</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="brand-logo">
                                <a href="index.html">
                                    <img src="../assets/images/logo.png" class="img-fluid blur-up lazyload" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="ri-bar-chart-horizontal-line sidebar-bar"></i>
                                    </div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li class="mobile-box">
                                            <div class="mobile-back text-end">Menu<i class="ri-close-line"></i></div>
                                        </li>
                                        <li><a href="index.html">Home</a></li>
                                        <li class="mega hover-cls">
                                            <a href="#!">feature <div class="lable-nav">new</div></a>
                                            <ul class="mega-menu full-mega-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row g-xl-4 g-0">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>invoice template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank" href="invoice-1.html">invoice
                                                                                    1</a></li>
                                                                            <li><a target="_blank" href="invoice-2.html">invoice
                                                                                    2</a></li>
                                                                            <li><a target="_blank" href="invoice-3.html">invoice
                                                                                    3</a></li>
                                                                            <li><a target="_blank" href="invoice-4.html">invoice
                                                                                    4</a></li>
                                                                            <li><a target="_blank" href="invoice-5.html">invoice
                                                                                    5</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title">
                                                                        <h5>elements</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="elements.html">
                                                                                    elements page<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"></i>
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank" href="../email-template/welcome.html">welcome</a>
                                                                            </li>
                                                                            <li><a target="_blank" href="../email-template/new-product-announcement.html">announcement</a>
                                                                            </li>
                                                                            <li><a target="_blank" href="../email-template/abandonment-email.html">abandonment</a>
                                                                            </li>
                                                                            <li><a target="_blank" href="../email-template/offer.html">offer</a>
                                                                            </li>
                                                                            <li><a target="_blank" href="../email-template/offer-2.html">offer
                                                                                    2</a></li>
                                                                            <li><a target="_blank" href="../email-template/product-review.html">review</a>
                                                                            </li>
                                                                            <li><a target="_blank" href="../email-template/featured-products.html">featured
                                                                                    product</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank" href="../email-template/black-friday.html">black
                                                                                    friday</a></li>
                                                                            <li><a target="_blank" href="../email-template/christmas.html">christmas</a>
                                                                            </li>
                                                                            <li><a target="_blank" href="../email-template/cyber-monday.html">cyber-monday</a>
                                                                            </li>
                                                                            <li><a target="_blank" href="../email-template/flash-sale.html">flash
                                                                                    sale</a></li>
                                                                            <li><a target="_blank" href="../email-template/email-order-success.html">order
                                                                                    success</a></li>
                                                                            <li><a target="_blank" href="../email-template/email-order-success-two.html">order
                                                                                    success 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>cookie bar</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="index.html">bottom<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"></i></a>
                                                                            </li>
                                                                            <li><a href="fashion-4.html">bottom left</a>
                                                                            </li>
                                                                            <li><a href="bicycle.html">bottom right</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title">
                                                                        <h5>search</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="marketplace-demo-2.html">ajax
                                                                                    search<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>model</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="index.html">Newsletter</a></li>
                                                                            <li><a href="index.html">exit<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"></i></a>
                                                                            </li>
                                                                            <li><a href="christmas.html">christmas</a>
                                                                            </li>
                                                                            <li><a href="furniture-3.html">black
                                                                                    friday</a></li>
                                                                            <li><a href="fashion-4.html">cyber
                                                                                    monday</a></li>
                                                                            <li><a href="marketplace-demo-3.html">new
                                                                                    year</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>add to cart</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="nursery.html">cart modal
                                                                                    popup</a></li>
                                                                            <li><a href="bags.html">cart top</a></li>
                                                                            <li><a href="shoes.html">cart bottom</a>
                                                                            </li>
                                                                            <li><a href="watch.html">cart left</a></li>
                                                                            <li><a href="tools.html">cart right</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="../assets/images/menu-banner.jpg" alt="" class="img-fluid mega-img d-xl-block d-none">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#!">shop</a>
                                            <ul>
                                                <li>
                                                    <a href="category-page(vegetables).html">tab style<span
                                                            class="new-tag">new</span></a>
                                                </li>
                                                <li>
                                                    <a href="category-page(top-filter).html">top filter</a>
                                                </li>
                                                <li>
                                                    <a href="category-page(modern).html">modern</a>
                                                </li>
                                                <li>
                                                    <a href="category-page.html">left sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="category-page(right).html">right sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="category-page(no-sidebar).html">no sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="category-page(category-slider).html">Category Slider</a>
                                                </li>
                                                <li>
                                                    <a href="category-page(sidebar-popup).html">sidebar popup</a>
                                                </li>
                                                <li>
                                                    <a href="category-page(metro).html">metro</a>
                                                </li>
                                                <li>
                                                    <a href="category-page(full-width).html">full width</a>
                                                </li>
                                                <li>
                                                    <a href="category-page(load-more).html">load more</a>
                                                </li>
                                                <li>
                                                    <a href=category-page(2-grid).html>two grid</a>
                                                </li>
                                                <li>
                                                    <a href=category-page(3-grid).html>three grid</a>
                                                </li>
                                                <li>
                                                    <a href="category-page(4-grid).html">four grid</a>
                                                </li>
                                                <li>
                                                    <a href="category-page(list-view).html">list view</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega hover-cls">
                                            <a href="#!">product</a>
                                            <ul class="mega-menu full-mega-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row g-xl-4 g-0">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product Page</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="product-page(thumbnail).html">Product
                                                                                    Thumbnail</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(4-image).html">Product
                                                                                    Image</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(slider).html">Product
                                                                                    Slider</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Product
                                                                                    Accordion</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(sticky).html">Product
                                                                                    Sticky</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(vertical-tab).html">Product
                                                                                    Vertical Tab</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product Page</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="product-page(left-sidebar).html">Product
                                                                                    Sidebar Left</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(right-sidebar).html">Product
                                                                                    Sidebar Right</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Product
                                                                                    No Sidebar</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Product
                                                                                    Column Thumbnail</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(image-outside).html">Product
                                                                                    Thumbnail Image Outside</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product Variants Style</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="product-page(3-column).html">Variant
                                                                                    Rectangle</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Variant
                                                                                    Circle</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Variant
                                                                                    Image Swatch</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(3-column).html">Variant
                                                                                    Color</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(vertical-tab).html">Variant
                                                                                    Radio Button</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(sticky).html">Variant
                                                                                    Dropdown</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product Features</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Product
                                                                                    Simple</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(left-sidebar).html">Product
                                                                                    Classified</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Size
                                                                                    Chart</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Delivery
                                                                                    & Return</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Product
                                                                                    Review</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Ask
                                                                                    an Expert</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product Features</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="product-page(bundle).html">Bundle
                                                                                    (Cross Sale)</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Hot
                                                                                    Stock
                                                                                    Progress</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Out
                                                                                    Stock</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(thumbnail).html">Sale
                                                                                    Countdown</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(thumbnail).html">Product
                                                                                    Zoom</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product Features</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Sticky
                                                                                    Checkout</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(accordian).html">Secure
                                                                                    Checkout</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(vertical-tab).html">Social
                                                                                    Share</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(thumbnail).html">Related
                                                                                    Products</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="product-page(right-sidebar).html">Wishlist
                                                                                    & Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="../assets/images/menu-banner.jpg" alt="" class="img-fluid mega-img d-xl-block d-none">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">pages</a>
                                            <ul>
                                                <li>
                                                    <a href="#!">vendor</a>
                                                    <ul>
                                                        <li><a href="vendor-dashboard.html">vendor dashboard</a>
                                                        </li>
                                                        <li><a href="vendor-profile.html">vendor profile</a></li>
                                                        <li><a href="become-vendor.html">become vendor</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#!">account</a>
                                                    <ul>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="dashboard.html">Dashboard</a></li>
                                                        <li><a href="login.html">login</a></li>
                                                        <li><a href="register.html">register</a></li>
                                                        <li><a href="contact.html">contact</a></li>
                                                        <li><a href="forget_pwd.html">forget password</a></li>
                                                        <li><a href="profile.html">profile</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="order-success.html">order success</a></li>
                                                        <li><a href="order-tracking.html">order tracking<span
                                                                    class="new-tag">new</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#!">portfolio</a>
                                                    <ul>
                                                        <li><a href="">grid</a>
                                                            <ul>
                                                                <li><a href="grid-2-col.html">grid
                                                                        2</a></li>
                                                                <li><a href="grid-3-col.html">grid
                                                                        3</a></li>
                                                                <li><a href="grid-4-col.html">grid
                                                                        4</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="">masonry</a>
                                                            <ul>
                                                                <li><a href="masonary-2-grid.html">grid 2</a></li>
                                                                <li><a href="masonary-3-grid.html">grid 3</a></li>
                                                                <li><a href="masonary-4-grid.html">grid 4</a></li>
                                                                <li><a href="masonary-fullwidth.html">full width</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="about-page.html">about us</a></li>
                                                <li><a href="search.html">search</a></li>
                                                <li><a href="review.html">review</a>
                                                </li>
                                                <li>
                                                    <a href="#!">compare</a>
                                                    <ul>
                                                        <li><a href="compare.html">compare</a></li>
                                                        <li><a href="compare-2.html">compare-2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="collection.html">collection</a></li>
                                                <li><a href="lookbook.html">lookbook</a></li>
                                                <li><a href="sitemap.html">site map</a>
                                                </li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="coming-soon.html">coming soon</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#!">blog</a>
                                            <ul>
                                                <li><a href="blog-page.html">left sidebar</a></li>
                                                <li><a href="blog(right-sidebar).html">right sidebar</a></li>
                                                <li><a href="blog(no-sidebar).html">no sidebar</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div data-bs-toggle="modal" data-bs-target="#searchModal">
                                                <i class="ri-search-line"></i>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div><i class="ri-equalizer-2-line"></i></div>
                                            <div class="show-div setting">
                                                <h6>language</h6>
                                                <ul>
                                                    <li><a href="#!">english</a></li>
                                                    <li><a href="#!">french</a></li>
                                                </ul>
                                                <h6>currency</h6>
                                                <ul class="list-inline">
                                                    <li><a href="#!">euro</a></li>
                                                    <li><a href="#!">rupees</a></li>
                                                    <li><a href="#!">pound</a></li>
                                                    <li><a href="#!">dollar</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div data-bs-toggle="offcanvas" data-bs-target="#cartOffcanvas">
                                                <i class="ri-shopping-cart-line"></i>
                                            </div>
                                            <span class="cart_qty_cls">
                                                <span>2</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end --> --}}


    <!-- thank-you section start -->
    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="success-text">
                        <div class="checkmark">
                            <svg class="star" height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z">
                                </path>
                            </svg>
                            <svg class="star" height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z">
                                </path>
                            </svg>
                            <svg class="star" height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z">
                                </path>
                            </svg>
                            <svg class="star" height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z">
                                </path>
                            </svg>
                            <svg class="star" height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z">
                                </path>
                            </svg>
                            <svg class="star" height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z">
                                </path>
                            </svg>
                            <svg class="checkmark__check" height="36" viewBox="0 0 48 36" width="48" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M47.248 3.9L43.906.667a2.428 2.428 0 0 0-3.344 0l-23.63 23.09-9.554-9.338a2.432 2.432 0 0 0-3.345 0L.692 17.654a2.236 2.236 0 0 0 .002 3.233l14.567 14.175c.926.894 2.42.894 3.342.01L47.248 7.128c.922-.89.922-2.34 0-3.23">
                                </path>
                            </svg>
                            <svg class="checkmark__background" height="115" viewBox="0 0 120 115" width="120" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M107.332 72.938c-1.798 5.557 4.564 15.334 1.21 19.96-3.387 4.674-14.646 1.605-19.298 5.003-4.61 3.368-5.163 15.074-10.695 16.878-5.344 1.743-12.628-7.35-18.545-7.35-5.922 0-13.206 9.088-18.543 7.345-5.538-1.804-6.09-13.515-10.696-16.877-4.657-3.398-15.91-.334-19.297-5.002-3.356-4.627 3.006-14.404 1.208-19.962C10.93 67.576 0 63.442 0 57.5c0-5.943 10.93-10.076 12.668-15.438 1.798-5.557-4.564-15.334-1.21-19.96 3.387-4.674 14.646-1.605 19.298-5.003C35.366 13.73 35.92 2.025 41.45.22c5.344-1.743 12.628 7.35 18.545 7.35 5.922 0 13.206-9.088 18.543-7.345 5.538 1.804 6.09 13.515 10.696 16.877 4.657 3.398 15.91.334 19.297 5.002 3.356 4.627-3.006 14.404-1.208 19.962C109.07 47.424 120 51.562 120 57.5c0 5.943-10.93 10.076-12.668 15.438z">
                                </path>
                            </svg>
                        </div>
                        <h2>thank you</h2>
                        <p>Payment is successfully processsed</p>
                        <p class="font-weight-bold">Transaction ID: {{ $order->order_id }}</p>

                        <a href="{{ url('/') }}" type="button" class="btn btn-success mt-4">Go To Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- order-detail section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="overflow-x: scroll;">
                    <div class="product-order">
                        <table class="table product-order-table">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Course name</th>
                                    <th>quantity</th>
                                    <th>price</th>
                                </tr>
                            </thead>

                            @php
                                $carts = App\Models\Cart::
                                            leftJoin('courses', 'courses.id', 'carts.course_id')->select('courses.image', 'courses.title', 'carts.price', 'carts.qty')
                                            ->where('carts.order_id', $order->order_id)
                                            ->get();
                            @endphp

                            <tbody>
                                @foreach ($carts as $row)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($row->image) }}" alt="" class="img-fluid blur-up lazyload">
                                        </td>
                                        <td>{{ $row->title }}</td>
                                        <td>{{ $row->qty }}</td>
                                        <td>${{ number_format($row->price, 2) }}</td>
                                    </tr>
                                @endforeach


                                {{-- <tr>
                                    <td>
                                        <img src="{{ asset('multikart/assets/images/fashion-1/product/4.jpg') }}" alt="" class="img-fluid blur-up lazyload">
                                    </td>
                                    <td>Chic Denim</td>
                                    <td>2</td>
                                    <td>$5.94</td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="{{ asset('multikart/assets/images/fashion-1/product/6.jpg') }}" alt="" class="img-fluid blur-up lazyload">
                                    </td>
                                    <td>Chic Mini Dress</td>
                                    <td>1</td>
                                    <td>$9.40</td>
                                </tr> --}}
                            </tbody>

                            <tfoot>
                                <tr>
                                    <td colspan="2">subtotal</td>
                                    <td colspan="2">${{ number_format($order->total_amount, 2) }}</td>
                                </tr>
                                {{-- <tr>
                                    <td colspan="2">shipping</td>
                                    <td colspan="2">$12.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2">tax(GST)</td>
                                    <td colspan="2">$10.00</td>
                                </tr> --}}
                                <tr>
                                    <td colspan="2">total</td>
                                    <td colspan="2">${{ number_format($order->total_amount, 2) }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="order-success-sec">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>summery</h4>
                                <ul class="order-detail">
                                    <li>Course ID: {{ $order->order_id }}</li>
                                    <li>Course Date: {{ date('M d, Y') }}</li>
                                    <li>Course Total: ${{ number_format($order->total_amount, 2) }}</li>
                                </ul>
                            </div>
                            <div class="col-sm-12">
                                <h4>shipping address</h4>
                                <ul class="order-detail">
                                    <li>{{ $order->address }}</li>
                                    {{-- <li>568, suite ave.</li>
                                    <li>Austrlia, 235153</li> --}}
                                    @if ( !empty($order->phone) )
                                        <li>Contact No. {{ $order->phone }}</li>
                                    @endif
                                </ul>
                            </div>

                            {{-- <div class="col-sm-12 payment-mode">
                                <h4>payment method</h4>
                                <p>Pay on Delivery (Cash/Card). Cash on delivery (COD) available. </p>
                                <p>Pay on Delivery (Cash/Card). Cash on delivery (COD) available. Card/Net banking acceptance subject to device availability.</p>
                            </div> --}}

                            {{-- <div class="col-md-12">
                                <div class="delivery-sec">
                                    <h3>expected date of delivery: <span>october 22, 2018</span></h3>
                                    <a href="order-tracking.html">track order</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->

    <!-- latest jquery-->
    <script src="{{ asset('multikart/assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- menu js-->
    <script src="{{ asset('multikart/assets/js/menu.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('multikart/assets/js/lazysizes.min.js') }}"></script>

    <!-- toaster Js plugins  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- slick js-->
    <script src="{{ asset('multikart/assets/js/slick.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('multikart/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{ asset('multikart/assets/js/bootstrap-notify.min.js') }}"></script>

    <!-- Theme js-->
    <script src="{{ asset('multikart/assets/js/theme-setting.js') }}"></script>
    <script src="{{ asset('multikart/assets/js/script.js') }}"></script>

    {!! Toastr::message() !!}

    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{!! $error !!}");
            @endforeach
        @endif
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>

</html>