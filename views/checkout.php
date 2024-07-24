<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>Thanh toán</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6 class="coupon__link"><span class="icon_tag_alt"></span> <a href="#">Have a coupon?</a> Click
                    here to enter your code.</h6>
            </div>
        </div>
        <form action="index.php?pgs=order" method="POST" class="checkout__form">
            <div class="row">
                <div class="col-lg-8">
                    <?php if(!empty($errors)) :
                    // Display errors to the user
                    foreach ($errors as $error) {
                        echo '<p style="color: red;">' . htmlspecialchars($error) . '</p>';
                    }
                    ?>

                    <?php endif?>
                    <h5>Billing detail</h5>
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="checkout__form__input">
                                <p>Address <span>*</span></p>
                                <input name="address" type="text" placeholder="Delivery Address">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Phone <span>*</span></p>
                                <input name="phone" type="text">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <p>Lựa chọn phương thức thanh toán<span>*</span></p>
                                <select name="payment_method" id="payment_method">
                                    <option value="1">Thanh toán khi nhận hàng (COD)</option>
                                    <option value="2">Thanh toán MoMo</option>
                                    <option value="3">Ví điện tử VNPAY / VNPAY QR </option>
                                    <option value="4">Chuyển khoản liên ngân hàng bằng QR Code</option>
                                </select>
                            </div>
                            <div class="checkout__form__input">
                                <p>Delivery notes <span>*</span></p>
                                <input type="text" name="delivery_note"
                                    placeholder="Note about your order, e.g, special noe for delivery">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout__order">
                        <h5>Your order</h5>
                        <div class="checkout__order__product">
                            <ul id="checkout_details">


                            </ul>
                        </div>
                        <div class="checkout__order__total">
                            <a href="index.php?pgs=register" id="not_have_account">Not have an account yet?</a>

                            <ul>
                                <li>Subtotal <span class="totalPrice">0</span></li>
                                <li>Total <span class="totalPrice" id="total_order">0</span></li>
                            </ul>
                        </div>
                        <div class="checkout__order__widget">
                            <!-- <label for="check-payment">
                                Cheque payment
                                <input type="checkbox" id="check-payment">
                                <span class="checkmark"></span>
                            </label>
                            <label for="paypal">
                                PayPal
                                <input type="checkbox" id="paypal">
                                <span class="checkmark"></span>
                            </label> -->
                        </div>
                        <input type="hidden" name="content" id="contentInput" value="">
                        <button type="submit" class="site-btn" name="submitBtn">Place oder</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Checkout Section End -->

<script>
    function sendContentToForm() {
        var spanContent = document.getElementById('total_order').textContent;
        document.getElementById('contentInput').value = spanContent;
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('form').addEventListener('submit', function () {
            sendContentToForm();
        });
    });
</script>