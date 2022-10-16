<!-- Shopping cart section  -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-cart-submit'])) {
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }

    // save for later
    if (isset($_POST['wishlist-submit'])) {
        $Cart->saveForLater($_POST['item_id']);
    }
}
?>

<!--Body Content-->
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Your cart</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                <form method="post" class="cart style2">
                    <table>
                        <thead class="cart__row cart__header">
                            <tr>
                                <th colspan="2" class="text-center">Product</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-right">Total</th>
                                <th class="action">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($product->getData(table: 'cart') as $item) :
                                // print_r($item);
                                $cart = $product->getProduct($item['item_id']);
                                $subTotal[] = array_map(function ($item) {
                            ?>
                                    <tr class="cart__row border-bottom line1 cart-flex border-top">
                                        <td class="cart__image-wrapper cart-flex-item">
                                            <a href="#"><img class="cart__image" src="<?php echo $item['item_image'] ?? "./assets/images/product-images/product-image1" ?>" alt="Product" /></a>
                                        </td>
                                        <td class="cart__meta small--text-left cart-flex-item">
                                            <div class="list-view-item__title">
                                                <a href="#"><?php echo $item['item_name'] ?? "Unknown" ?></a>
                                            </div>
                                            <!-- 
                                            <div class="cart__meta-text">
                                                Color: Navy<br />
                                                Size: Small<br />
                                            </div> -->
                                        </td>
                                        <td class="cart__price-wrapper cart-flex-item">
                                            <span class="money">₱<?php echo $item['item_price'] ?? "0.00" ?></span>
                                        </td>
                                        <td class="cart__update-wrapper cart-flex-item text-right">
                                            <div class="cart__qty text-center">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                    <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="1" pattern="[0-9]*" />
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right small--hide cart-price">
                                            <div><span class="money">₱735.00</span></div>
                                        </td>
                                        <td class="text-center small--hide">
                                            <form method="post">
                                                <button type="submit" name="delete-cart-submit" class="no-style">
                                                    <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                                    <div class="btn btn--secondary cart__remove" title="Remove Item"><i class="icon icon anm anm-times-l"></i></div>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                    return $item['item_price'];
                                }, $cart); //closing array_map function
                            endforeach;
                            // print_r($subTotal);
                            ?>
                            <!-- <tr class=" cart__row border-bottom line1 cart-flex border-top">
                                        <td class="cart__image-wrapper cart-flex-item">
                                            <a href="#"><img class="cart__image" src="assets/images/product-images/product-image1.jpg" alt="Elastic Waist Dress - Navy / Small" /></a>
                                        </td>
                                        <td class="cart__meta small--text-left cart-flex-item">
                                            <div class="list-view-item__title">
                                                <a href="#">Elastic Waist Dress </a>
                                            </div>

                                            <div class="cart__meta-text">
                                                Color: Navy<br />Size: Small<br />
                                            </div>
                                        </td>
                                        <td class="cart__price-wrapper cart-flex-item">
                                            <span class="money">₱735.00</span>
                                        </td>
                                        <td class="cart__update-wrapper cart-flex-item text-right">
                                            <div class="cart__qty text-center">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                    <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="1" pattern="[0-9]*" />
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right small--hide cart-price">
                                            <div><span class="money">₱735.00</span></div>
                                        </td>
                                        <td class="text-center small--hide">
                                            <a href="#" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a>
                                        </td>
                                    </tr> -->
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-left">
                                    <a href="./" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue
                                        shopping</a>
                                </td>
                                <!-- <td colspan="3" class="text-right">
                                    <button type="submit" name="update" class="btn--link cart-update">
                                        <i class="fa fa-refresh"></i> Update
                                    </button>
                                </td> -->
                            </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                <div class="cart-note">
                    <div class="solid-border">
                        <h5>
                            <label for="CartSpecialInstructions" class="cart-note__label small--text-center">Add a note to your order</label>
                        </h5>
                        <textarea name="note" id="CartSpecialInstructions" class="cart-note__input"></textarea>
                    </div>
                </div>
                <div class="solid-border">
                    <div class="row">
                        <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">₱<?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span></span>
                    </div>
                    <div class="cart__shipping">
                        Shipping &amp; taxes calculated at checkout
                    </div>
                    <p class="cart_tearm">
                        <label>
                            <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm" required="" />
                            I agree with the terms and conditions</label>
                    </p>
                    <input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Checkout" disabled="disabled" />
                    <div class="paymnet-img">
                        <img src="assets/images/payment-img.jpg" alt="Payment" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Body Content-->