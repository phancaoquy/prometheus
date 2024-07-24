<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        cilisis.</p>
                    <div class="footer__payment">
                        <a href="#"><img src="img/payment/payment-1.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-2.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-3.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-4.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-5.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Account</h6>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Orders Tracking</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>NEWSLETTER</h6>
                    <form action="#">
                        <input type="text" placeholder="Email">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This template
                        is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                    </p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

</body>

<!-- Js Plugins -->
<script src="./publics/js/jquery-3.3.1.min.js"></script>
<script src="./publics/js/bootstrap.min.js"></script>
<script src="./publics/js/jquery.magnific-popup.min.js"></script>
<script src="./publics/js/jquery-ui.min.js"></script>
<script src="./publics/js/mixitup.min.js"></script>
<script src="./publics/js/jquery.countdown.min.js"></script>
<script src="./publics/js/jquery.slicknav.js"></script>
<script src="./publics/js/owl.carousel.min.js"></script>
<script src="./publics/js/jquery.nicescroll.min.js"></script>
<script src="./publics/js/main.js"></script>


<!-- Shop cart -->

<script>
    $(document).ready(function () {

        load_cart_data();

        function load_cart_data() {
            $.ajax({
                url: "models/func_shopCart.php",
                method: "POST",
                dataType: "json",
                success: function (data) {
                    $('#cart_details').html(data.cart_details);
                    $('#checkout_details').html(data.checkout_details);
                    $('.totalPrice').text(data.total_price);
                    $('.bag_item').text(data.total_item);
                }
            });
        }

        $(document).on('click', '.add_to_cart', function () {
            var product_id = $(this).attr("id");
            var product_name = $('#name' + product_id + '').val();
            var product_price = $('#price' + product_id + '').val();
            var product_quantity = $('#quantity' + product_id).val();
            var action = "add";
            if (product_quantity > 0) {
                $.ajax({
                    url: "controllers/shopping_cart.php",
                    method: "POST",
                    data: { product_id: product_id, product_name: product_name, product_price: product_price, product_quantity: product_quantity, action: action },
                    success: function (data) {
                        load_cart_data();
                        alert("Item has been Added into Cart");
                    }
                });
            }
            else {
                alert("Please Enter Number of Quantity");
            }
        });

        $(document).on('click', '.delete', function () {
            var product_id = $(this).attr("id");
            var action = 'remove';
            if (confirm("Are you sure you want to remove this product?")) {
                $.ajax({
                    url: "controllers/shopping_cart.php",
                    method: "POST",
                    data: { product_id: product_id, action: action },
                    success: function () {
                        load_cart_data();
                        alert("Item has been removed from Cart");
                    }
                })
            }
            else {
                return false;
            }
        });

        $(document).on('click', '#clear_cart', function () {
            var action = 'empty';
            $.ajax({
                url: "controllers/shopping_cart.php",
                method: "POST",
                data: { action: action },
                success: function () {
                    load_cart_data();
                    alert("Your Cart has been clear");
                }
            });
        });

    });

</script>


</html>