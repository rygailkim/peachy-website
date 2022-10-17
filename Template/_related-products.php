<?php
shuffle($product_shuffle);

// request method post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['related_products_submit'])) {
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<!--Related Product Slider-->
<div class="related-product grid-products">
    <header class="section-header">
        <h2 class="section-header__title text-center h2">
            <span>Related Products</span>
        </h2>
    </header>
    <div class="productPageSlider">
        <?php foreach ($product_shuffle as $item) {
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
                        <img class="hover blur-up lazyload" data-src="<?php echo $item['item_image'] ?? "./assets/images/product-images/product-image1-1" ?>" src="<?php echo $item['item_image'] ?? "./assets/images/product-images/product-image1-1" ?>" title="product" />
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
                        <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])) {
                            echo '<button type="submit" disabled class="btn btn btn-addto-cart">In the Cart</button>';
                        } else {
                            echo '<button name="related_products_submit" class="btn btn-addto-cart" type="submit" tabindex="0">Add To Cart</button>';
                        }
                        ?>
                    </form>
                    <div class="button-set">
                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
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
                        <a href="#"><?php echo $item['item_name'] ?? "Unknown" ?></a>
                    </div>
                    <!-- End product name -->
                    <!-- product price -->
                    <div class="product-price">
                        <span class="price">₱<?php echo $item['item_price'] ?? "0.00" ?></span>
                    </div>
                    <!-- End product price -->

                    <div class="product-review">
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star"></i>
                        <i class="font-13 fa fa-star-o"></i>
                        <i class="font-13 fa fa-star-o"></i>
                    </div>
                    <!-- Variant -->
                    <!-- <ul class="swatches">
                        <li class="swatch medium rounded">
                            <img src="assets/images/product-images/variant4-1.jpg" alt="image" />
                        </li>
                        <li class="swatch medium rounded">
                            <img src="assets/images/product-images/variant4-2.jpg" alt="image" />
                        </li>
                        <li class="swatch medium rounded">
                            <img src="assets/images/product-images/variant4-3.jpg" alt="image" />
                        </li>
                        <li class="swatch medium rounded">
                            <img src="assets/images/product-images/variant4-4.jpg" alt="image" />
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
                <a href="#">
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
                    <button class="btn btn-addto-cart" type="submit" tabindex="0">
                        Add to Cart
                    </button>
                </form>
                <div class="button-set">
                    <a href="#" title="Quick View" class="quick-view" tabindex="0">
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
                    <a href="#">Cape Dress</a>
                </div>
                <!-- End product name -->
                <!-- product price -->
                <div class="product-price">
                    <span class="old-price">₱900.00</span>
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
                <!-- Variant -->
                <ul class="swatches">
                    <li class="swatch medium rounded">
                        <img src="assets/images/product-images/variant4-1.jpg" alt="image" />
                    </li>
                    <li class="swatch medium rounded">
                        <img src="assets/images/product-images/variant4-2.jpg" alt="image" />
                    </li>
                    <li class="swatch medium rounded">
                        <img src="assets/images/product-images/variant4-3.jpg" alt="image" />
                    </li>
                    <li class="swatch medium rounded">
                        <img src="assets/images/product-images/variant4-4.jpg" alt="image" />
                    </li>
                </ul>
                <!-- End Variant -->
            </div>
            <!-- End product details -->
        </div>
    </div>
</div>
<!--End Related Product Slider-->