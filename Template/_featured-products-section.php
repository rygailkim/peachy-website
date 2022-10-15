<?php

shuffle($product_shuffle);

// request method post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['featured_products_submit'])) {
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>


<section id="featured-products-section">
    <div class="tab-slider-product pb-section pt-section section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h1 class="h1">Peachy Products</h1>
                    </div>
                    <div class="tabs-listing">
                        <ul class="tabs clearfix">
                            <li class="active" rel="tab1">Women</li>
                            <li rel="tab2">Men</li>
                            <li rel="tab3">Sale</li>
                        </ul>
                        <div class="tab_container">
                            <div id="tab1" class="tab_content grid-products">
                                <div class="productSlider">
                                    <?php foreach ($product_shuffle as $item)
                                        if ($item['item_category'] == "Women") {
                                    ?>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href=" <?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="<?php echo $item['item_image'] ?? "./assets/images/product-images/product-image1" ?>" src="<?php echo $item['item_image'] ?? "./assets/images/product-images/product-image1" ?>" alt="image" title="product" />
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="<?php echo $item['item_alt_image'] ?? "./assets/images/product-images/product-image1-1" ?>" src="<?php echo $item['item_alt_image'] ?? "./assets/images/product-images/product-image1-1" ?>" alt="image" title="product" />
                                                    <!-- End hover image -->
                                                    <!-- product label -->
                                                    <!-- <div class="product-labels">
                                                        <span class="lbl on-sale">Sale</span>
                                                    </div> -->
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" method="post">
                                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                                    <button name="featured_products_submit" class="btn btn-addto-cart" type="button" tabindex="0">
                                                        Add To Cart
                                                    </button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="./product-accordion.html"><?php echo $item['item_name'] ?? "Unknown" ?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">₱<?php echo $item['item_price'] ?? "0" ?></span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                </div>
                                                <!-- Variant -->
                                                <!-- <ul class="swatches">
                                                    <li class="swatch medium rounded">
                                                        <img src="assets/images/product-images/variant3-1.jpg" alt="image" />
                                                    </li>
                                                    <li class="swatch medium rounded">
                                                        <img src="assets/images/product-images/variant3-2.jpg" alt="image" />
                                                    </li>
                                                    <li class="swatch medium rounded">
                                                        <img src="assets/images/product-images/variant3-3.jpg" alt="image" />
                                                    </li>
                                                    <li class="swatch medium rounded">
                                                        <img src="assets/images/product-images/variant3-4.jpg" alt="image" />
                                                    </li>
                                                </ul> -->
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="./product-accordion.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image4.jpg" src="assets/images/product-images/product-image4.jpg" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image4-1.jpg" src="assets/images/product-images/product-image4-1.jpg" alt="image" title="product" />
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels">
                                                    <span class="lbl on-sale">Sale</span>
                                                </div>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">
                                                    Add To Cart
                                                </button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="./product-accordion.html">Paper Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">₱550.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch medium rounded">
                                                    <img src="assets/images/product-images/variant3-1.jpg" alt="image" />
                                                </li>
                                                <li class="swatch medium rounded">
                                                    <img src="assets/images/product-images/variant3-2.jpg" alt="image" />
                                                </li>
                                                <li class="swatch medium rounded">
                                                    <img src="assets/images/product-images/variant3-3.jpg" alt="image" />
                                                </li>
                                                <li class="swatch medium rounded">
                                                    <img src="assets/images/product-images/variant3-4.jpg" alt="image" />
                                                </li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab_content grid-products">
                                <div class="productSlider">
                                    <?php foreach ($product_shuffle as $item)
                                        if ($item['item_category'] == "Men") {
                                    ?>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="./product-accordion.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="<?php echo $item['item_image'] ?? "./assets/images/product-images/product-image1" ?>" src="<?php echo $item['item_image'] ?? "./assets/images/product-images/product-image1" ?>" alt="image" title="product" />
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="<?php echo $item['item_alt_image'] ?? "./assets/images/product-images/product-image1-1" ?>" src="<?php echo $item['item_alt_image'] ?? "./assets/images/product-images/product-image1-1" ?>" alt="image" title="product" />
                                                    <!-- End hover image -->
                                                    <!-- product label -->
                                                    <!-- <div class="product-labels">
                                                        <span class="lbl on-sale">Sale</span>
                                                    </div> -->
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" method="post">
                                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                                    <button name='featured_products_submit' class="btn btn-addto-cart" type="button" tabindex="0">
                                                        Add To Cart
                                                    </button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="./product-accordion.html"><?php echo $item['item_name'] ?? "Unknown" ?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">₱<?php echo $item['item_price'] ?? "0" ?></span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                </div>
                                                <!-- Variant -->
                                                <!-- <ul class="swatches">
                                                    <li class="swatch medium rounded">
                                                        <img src="assets/images/product-images/variant3-1.jpg" alt="image" />
                                                    </li>
                                                    <li class="swatch medium rounded">
                                                        <img src="assets/images/product-images/variant3-2.jpg" alt="image" />
                                                    </li>
                                                    <li class="swatch medium rounded">
                                                        <img src="assets/images/product-images/variant3-3.jpg" alt="image" />
                                                    </li>
                                                    <li class="swatch medium rounded">
                                                        <img src="assets/images/product-images/variant3-4.jpg" alt="image" />
                                                    </li>
                                                </ul> -->
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    <?php
                                        }
                                    ?>

                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="./product-accordion.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image10.jpg" src="assets/images/product-images/product-image10.jpg" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image10-1.jpg" src="assets/images/product-images/product-image10-1.jpg" alt="image" title="product" />
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels rectangular">
                                                    <span class="lbl on-sale">-16%</span>
                                                    <span class="lbl pr-label1">new</span>
                                                </div>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">
                                                    Add To Cart
                                                </button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="./product-accordion.html">Zipper Jacket</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">₱788.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab_content grid-products">
                                <div class="productSlider">
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="./product-accordion.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image11.jpg" src="assets/images/product-images/product-image11.jpg" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image11-1.jpg" src="assets/images/product-images/product-image11-1.jpg" alt="image" title="product" />
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">
                                                    Add To Cart
                                                </button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="./product-accordion.html">Azur Bracelet in Blue Azurite</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">₱168.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="./product-accordion.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image12.jpg" src="assets/images/product-images/product-image12.jpg" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image12-1.jpg" src="assets/images/product-images/product-image12-1.jpg" alt="image" title="product" />
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">
                                                    Add To Cart
                                                </button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="./product-accordion.html">Bi-Goutte Earrings</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">₱58.00</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="./product-accordion.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image13.jpg" src="assets/images/product-images/product-image13.jpg" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image13-1.jpg" src="assets/images/product-images/product-image13-1.jpg" alt="image" title="product" />
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">
                                                    Add To Cart
                                                </button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>

                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="./product-accordion.html">Ashton Necklace</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">₱228.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="./product-accordion.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image14.jpg" src="assets/images/product-images/product-image14.jpg" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image14-1.jpg" src="assets/images/product-images/product-image14-1.jpg" alt="image" title="product" />
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">
                                                    Add To Cart
                                                </button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="./product-accordion.html">Ara Ring</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">₱198.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="./product-accordion.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image15.jpg" src="assets/images/product-images/product-image15.jpg" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image15-1.jpg" src="assets/images/product-images/product-image15-1.jpg" alt="image" title="product" />
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">
                                                    Add To Cart
                                                </button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="./product-accordion.html">Ara Ring</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">₱198.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Products Section -->