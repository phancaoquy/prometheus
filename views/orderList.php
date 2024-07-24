<?php
$html_orders_list = show_orders($order_list);
?>

<!-- Shop Cart Section Begin -->
<section class="shop-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop__cart__table">
                    <h4>Order details</h4>
                    <?= $html_orders_list ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Cart Section End -->