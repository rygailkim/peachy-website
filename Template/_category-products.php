<?php
$products = $product->getData();
?>


<div class="productList">
    <!--Toolbar-->
    <button type="button" class="btn btn-filter d-block d-md-none d-lg-none">
        Product Filters
    </button>
    <div class="toolbar">
        <div class="filters-toolbar-wrapper">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 text-right">
                    <div class="filters-toolbar__item">
                        <label for="SortBy" class="hidden">Sort</label>
                        <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                            <option value="title-ascending" selected="selected">
                                Sort
                            </option>
                            <option>Best Selling</option>
                            <option>Alphabetically, A-Z</option>
                            <option>Alphabetically, Z-A</option>
                            <option>Price, low to high</option>
                            <option>Price, high to low</option>
                            <option>Date, new to old</option>
                            <option>Date, old to new</option>
                        </select>
                        <input class="collection-header__default-sort" type="hidden" value="manual" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Toolbar-->
    <div class="grid-products grid--view-items">
        <div class="row">
            <?php foreach ($product_shuffle as $item)
                if ($item['item_category'] == "Women") {
            ?>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 grid-view-item style2 item">
                    <div class="grid-view_image">
                        <!-- start product image -->
                        <a href=" <?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>" class="grid-view-item__link">
                            <!-- image -->
                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image1.jpg" src="assets/images/product-images/product-image1.jpg" alt="image" title="product" />
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image1-1.jpg" src="assets/images/product-images/product-image1-1.jpg" alt="image" title="product" />
                            <!-- End hover image -->
                            <!-- product label -->
                            <div class="product-labels rectangular">
                                <span class="lbl on-sale">-16%</span>
                                <span class="lbl pr-label1">new</span>
                            </div>
                            <!-- End product label -->
                        </a>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details hoverDetails text-center mobile">
                            <!-- product name -->
                            <div class="product-name">
                                <a href=" <?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>">Edna Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="old-price">₱500.00</span>
                                <span class="price">₱600.00</span>
                            </div>
                            <!-- End product price -->
                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star-o"></i>
                                <i class="font-13 fa fa-star-o"></i>
                            </div>
                            <!-- product button -->
                            <div class="button-set">
                                <a href="#content_quickview" title="Quick View" class="quick-view-popup quick-view" tabindex="0">
                                    <i class="icon anm anm-search-plus-r"></i>
                                </a>
                                <!-- Start product button -->
                                <form action="#" method="post">
                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="submit">
                                        <i class="icon anm anm-bag-l"></i>
                                    </button>
                                </form>
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                        <i class="icon anm anm-heart-l"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- end product button -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
            <?php
                }
            ?>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item grid-view-item style2 grid-view-item--sold-out">
                <div class="grid-view_image">
                    <!-- start product image -->
                    <a href="product-accordion.html" class="grid-view-item__link">
                        <!-- image -->
                        <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image27.jpg" src="assets/images/product-images/product-image27.jpg" alt="image" title="product" />
                        <!-- End image -->
                        <!-- Hover image -->
                        <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image27-1.jpg" src="assets/images/product-images/product-image27-1.jpg" alt="image" title="product" />
                        <!-- End hover image -->
                        <span class="sold-out"><span>Sold out</span></span>
                    </a>
                    <!-- end product image -->

                    <!--start product details -->
                    <div class="product-details hoverDetails text-center mobile">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="#">Camelia Reversible Jacket in Navy/Blue</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">₱488.00</span>
                        </div>
                        <!-- End product price -->

                        <div class="product-review">
                            <i class="font-13 fa fa-star-o"></i>
                            <i class="font-13 fa fa-star-o"></i>
                            <i class="font-13 fa fa-star-o"></i>
                            <i class="font-13 fa fa-star-o"></i>
                            <i class="font-13 fa fa-star-o"></i>
                        </div>
                    </div>
                    <!-- End product details -->
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 grid-view-item style2 item">
                <div class="grid-view_image">
                    <!-- start product image -->
                    <a href="product-accordion.html" class="grid-view-item__link">
                        <!-- image -->
                        <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image28.jpg" src="assets/images/product-images/product-image28.jpg" alt="image" title="product" />
                        <!-- End image -->
                        <!-- Hover image -->
                        <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image28-1.jpg" src="assets/images/product-images/product-image28-1.jpg" alt="image" title="product" />
                        <!-- End hover image -->
                    </a>
                    <!-- end product image -->
                    <!--start product details -->
                    <div class="product-details hoverDetails text-center mobile">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="#">Wrinkled Tux Shirt in Navy</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">₱158.00</span>
                        </div>
                        <!-- End product price -->
                        <div class="product-review">
                            <i class="font-13 fa fa-star-o"></i>
                            <i class="font-13 fa fa-star-o"></i>
                            <i class="font-13 fa fa-star-o"></i>
                            <i class="font-13 fa fa-star-o"></i>
                            <i class="font-13 fa fa-star-o"></i>
                        </div>
                        <!-- product button -->
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <!-- Start product button -->
                            <form action="#" method="post">
                                <button class="btn btn--secondary cartIcon btn-addto-cart" type="submit">
                                    <i class="icon anm anm-bag-l"></i>
                                </button>
                            </form>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End product button -->
                    </div>
                    <!-- End product details -->
                </div>
            </div>
        </div>
    </div>
</div>