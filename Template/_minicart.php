                        <div class="site-cart">
                            <a href="#;" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?php echo count($product->getData(table: 'cart')) ?></span>
                            </a>
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <?php foreach ($product->getData(table: 'cart') as $item) :
                                        // print_r($item);
                                        $cart = $product->getProduct($item['item_id']);
                                        $subTotalMinicart[] = array_map(function ($item) {
                                    ?>
                                            <li class="item">
                                                <a class="product-image" href="#">
                                                    <img src="<?php echo $item['item_image'] ?? "./assets/images/product-images/product-image1" ?>" alt="<?php echo $item['item_name'] ?? "Unknown" ?>" title="" />
                                                </a>
                                                <div class="product-details">
                                                    <form method="post">
                                                        <button type="submit" name="delete-cart-submit" class="no-style">
                                                            <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                                            <div class="remove"><i class="icon icon anm anm-times-l"></i></div>
                                                        </button>
                                                    </form>

                                                    <!-- <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a> -->
                                                    <a class="pName" href="cart.php"><?php echo $item['item_name'] ?? "Unknown" ?></a>
                                                    <!-- <div class="variant-cart">Black / XL</div> -->
                                                    <div class="wrapQtyBtn">
                                                        <div class="qtyField">
                                                            <span class="label">Qty:</span>
                                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                            <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty" />
                                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="priceRow">
                                                        <div class="product-price">
                                                            <span class="money">₱<?php echo $item['item_price'] ?? "0.00" ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                    <?php
                                            return $item['item_price'];
                                        }, $cart); //closing array_map function
                                    endforeach; ?>
                                    <!-- <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/product-images/cape-dress-2.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.php">Elastic Waist Dress</a>
                                            <div class="variant-cart">Gray / XXL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty" />
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">₱99.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">₱<?php echo isset($subTotalMinicart) ? $Cart->getSum($subTotalMinicart) : 0; ?></span></span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="cart.php" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="checkout.php" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--EndMinicart Popup-->
                        </div>