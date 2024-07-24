<?php
//fetch_cart//
session_start();
function show_cart(){
    $total_price = 0;
    $total_item = 0;
    $output = '
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>        
    ';
    $check_out = '
            <li>
                <span class="top__text">Product</span>
                <span class="top__text__right">Total</span>
            </li>';
    if (!empty($_SESSION["shopping_cart"])) {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            $output .= '
                        <tbody>
                            <tr>
                                <td class="cart__product__item">
                                    <img src="../publics/img/product/books/book_' . $values["product_id"] . '_1.jpg" alt="">
                                    <div class="cart__product__item__title">
                                        <h6>' . $values["product_name"] . '</h6>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">' . $values["product_price"] . 'đ</td>
                                <td class="cart__quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="' . $values["product_quantity"] . '">
                                    </div>
                                </td>
                                <td class="cart__total">' . number_format($values["product_quantity"] * $values["product_price"], 3) . 'đ</td>

                                <td class="cart__close"><span name="delete" id="' . $values["product_id"] . '" class="delete icon_close"></span></td>
                            </tr>
                        </tbody>
                        ';
            $check_out .= '<li>'.$values["product_name"].'<span>'.$values["product_price"].'</span></li>';                        
            $total_price = $total_price + ((int)$values["product_quantity"] * (float)$values["product_price"]);
            $total_item = $total_item + 1;
        }
    } else {
        $output .= '
                <tbody>
                    <td colspan="5" align="center">
                        Your Cart is Empty!
                    </td>
                </tbody>';
        $check_out .= '<li><span>You have no item!</span></li>';
    }
    $data = array(
        'cart_details'      => $output,
        'checkout_details'  => $check_out,
        'total_price'       => number_format($total_price, 3) . 'đ',
        'total_item'        => $total_item
    );
    echo json_encode($data);
}
show_cart();
?>