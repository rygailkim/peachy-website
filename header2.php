<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Product Accordion | Peachy Fashion</title>
    <meta name="description" content="description" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body class="template-product belle">
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit">
                        <i class="icon anm anm-search-l"></i>
                    </button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off" />
                </form>
                <button type="button" class="search-trigger close-btn">
                    <i class="icon anm anm-times-l"></i>
                </button>
            </div>
        </div>
        <!--End Search Form Drawer-->
        <!--Top Header-->
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                        <div class="currency-picker">
                            <span class="selected-currency">USD</span>
                            <ul id="currencies">
                                <li data-currency="INR" class="">INR</li>
                                <li data-currency="GBP" class="">GBP</li>
                                <li data-currency="CAD" class="">CAD</li>
                                <li data-currency="USD" class="selected">USD</li>
                                <li data-currency="AUD" class="">AUD</li>
                                <li data-currency="EUR" class="">EUR</li>
                                <li data-currency="JPY" class="">JPY</li>
                            </ul>
                        </div>
                        <div class="language-dropdown">
                            <span class="language-dd">English</span>
                            <ul id="language">
                                <li class="">German</li>
                                <li class="">French</li>
                            </ul>
                        </div>
                        <p class="phone-no">
                            <i class="anm anm-phone-s"></i> +440 0(111) 044 833
                        </p>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                        <div class="text-center">
                            <p class="top-header_middle-text">Worldwide Express Shipping</p>
                        </div>
                    </div>
                    <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                        <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                        <ul class="customer-links list-inline">
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Create Account</a></li>
                            <li><a href="wishlist.php">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Header-->
        <!--Header-->
        <div class="header-wrap animated d-flex">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!--Desktop Logo-->
                    <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                        <a href="index.php">
                            <img src="assets/images/logo.svg" alt="Peachy Fashion" title="Peachy Fashion" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                        <div class="d-block d-lg-none">
                            <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                <i class="icon anm anm-times-l"></i>
                                <i class="anm anm-bars-r"></i>
                            </button>
                        </div>
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav">
                            <!-- for mobile -->
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1">
                                    <a href="./index.php">Home<i class="anm anm-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1">
                                    <a href="./shop-women.php">Women<i class="anm anm-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1">
                                    <a href="./shop-men.php">Men<i class="anm anm-angle-down-l"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logo.svg" alt="Peachy Fashion" title="Peachy Fashion" />
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <?php
                        include('Template/_minicart.php')
                        ?>
                        <div class="site-header__search">
                            <button type="button" class="search-trigger">
                                <i class="icon anm anm-search-l"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header-->
        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu">
                <i class="icon anm anm-times-l pull-right"></i> Close Menu
            </div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1">
                    <a href="./index.php">Home</a>
                </li>
                <li class="lvl1">
                    <a href="./shop-women.php">Women</a>
                </li>
                <li class="lvl1">
                    <a href="./shop-men.php">Men</a>
                </li>
            </ul>
        </div>
        <!--End Mobile Menu-->