<?php
$html_orders_details = show_orders_details($order_Details);
?>

<!-- Shop Cart Section Begin -->
<section class="shop-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop__cart__table">
                    <h4>Đơn hàng chi tiết</h4>
                    <?= $html_orders_details ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Cart Section End -->