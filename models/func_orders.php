<?php
function upload_order($user_id, $book_id, $quantity, $order_code)
{
    $sql = "INSERT INTO orders(user_id, book_id, quantity, order_code) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $user_id, $book_id, $quantity, $order_code);
}

function upload_order_details($delivery_note, $payment_status, $total_order, $order_code, $payment_method)
{
    $sql = "INSERT INTO order_details(delivery_note, payment_status, total_order, order_code, pm_id) VALUES (?, ?, ?, ?, ?)";
    pdo_execute($sql, $delivery_note, $payment_method, $total_order, $order_code, $payment_method);
}
function fetch_order_details($code)
{
    $sql = "SELECT orders.order_code as code, book_images.images as cover, books.title as title, books.price as price, orders.quantity as quantity, order_details.total_order as total_order
    FROM orders
    INNER JOIN order_details
    ON orders.order_code = order_details.order_code
    INNER JOIN books
    ON books.id = orders.book_id
    INNER JOIN book_images 
    ON book_images.book_id = books.id
    WHERE orders.order_code = ?
    AND book_images.images LIKE '%1.jpg'";
    return pdo_query($sql, $code);
}

function fetch_orders($user_id)
{
    $sql = "SELECT DISTINCT order_details.order_code as code, users.usr_address as address, users.phone as phone, order_details.delivery_note as note, order_details.creation_date as order_date, payment_methods.pm_name, order_details.payment_status, order_details.total_order as total_order
    FROM orders 
    INNER JOIN order_details
    ON orders.order_code = order_details.order_code 
    INNER JOIN users
    ON users.id = orders.user_id
    INNER JOIN payment_methods
    ON payment_methods.id = order_details.pm_id
    WHERE orders.user_id = ?
    GROUP BY order_details.order_code 
    ORDER BY order_details.creation_date DESC LIMIT 4";
    return pdo_query($sql, $user_id);
}

function show_orders($order_list)
{
    $html_orders_list = '';

    if (!empty($order_list)) {
        foreach ($order_list as $order_data) {
            $order_date = '';
            if (!empty($order_data["order_date"])) {
                $dt = new DateTime($order_data["order_date"]);
                $deli_date = new DateTime($order_data["order_date"]);
                $deli_date->add(new DateInterval('P7D'));
                $order_date = $dt->format('d-m-y h:m:s');
                $delivery_date = $deli_date->format('d-m-y');
            }
            $html_orders_list .= '
                                <div class="orders_code">#' . $order_data["code"] . '</div>
                                <table class="order-table">
                                    <thead>
                                        <tr>
                                            <th>Địa chỉ</th>
                                            
                                            <th>SĐT</th>
                                            <th>Lưu ý</th>
                                            <th>Ngày đặt</th>
                                            <th>Ngày giao</th>                             
                                        </tr>
                                    </thead>
                    <tbody>
                        <tr>
                            <td class="order_list">
                                
                                <div class="cart__product__item__title">
                                    <h6>' . $order_data["address"] . '</h6>
                                </div>
                            </td>
                            <td class="cart__ordered">' . $order_data["phone"] . '</td>
                            <td class="">                                
                                <div class="cart__product__item__title">
                                    <h6>' . $order_data["note"] . '</h6>
                                </div>
                            </td>
                            <td class="cart__ordered">' . $order_date . '</td>
                            <td class="cart__ordered">' . $delivery_date . '</td>
                        </tr>
                     
                            </tbody>
                        
                    ';
            $html_orders_list .= '<tr>
                        <td class="cart__total"></td>   
                        <td class="cart__total"></td>        
                        <td class="cart__total"></td>
                        <td class="cart__total">Total: ' . $order_data["total_order"] . '</td>
                        <td class="cart__total"><a href="index.php?pgs=orderDetails&order_code=' . $order_data["code"] . '"><span></span>Xem chi tiết</a></td>
                     </tr>
                        </tbody>
                    </table>';

        }
    } else {
        $html_orders_list .= '
        <table class="order-table">
            <thead>
                <tr>
                    <th colspan=""></th>
                    <th colspan=""></th>
                    <th colspan=""></th>
                    <th colspan=""></th>
                    <th colspan=""></th>
                </tr>
            </thead>
            <tbody>
            <tr>
              
                <td style="text-align: center;" class="cart__product__item__title" colspan="4">Bạn chưa có đơn hàng nào!</td>
               
            </tr>
        </table>';
    }

    return $html_orders_list;
}

function show_orders_details($order_Details)
{
    $html_orders_details = '<table class="order-table">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng giá</th>
                                </tr>
                            </thead>';

    if (!empty($order_Details)) {
        
        foreach ($order_Details as $order) {
      
            $html_orders_details .= '
                                    <tbody>
                                        <tr>
                                            <td class="cart__product__item">
                                                <img src="./publics/img/product/books/' . $order["cover"] . '" alt="">
                                                <div class="cart__product__item__title">
                                                    <h6>' . $order["title"] . '</h6>
                                                </div>
                                            </td>
                                            <td class="cart__price">' . $order["price"] . 'đ</td>
                                            <td class="cart__quantity">
                                                <div class="pro-qty-ordered">
                                                    <input type="text" value="' . $order["quantity"] . '">
                                                </div>
                                            </td>
                                            <td class="cart__total">' . number_format($order["price"] * $order["quantity"], 3). 'đ</td>
                                        </tr>
                                    ';
        }

        $html_orders_details .= '<tr>
                                    <td class="cart__total"></td>   
                                    <td class="cart__total"></td>        
                                    <td class="cart__total"></td>
                                    <td class="cart__order">Total: ' . $order["total_order"] . 'đ</td>
                                </tr>
                            </tbody>
                        </table>';
    } else {
        $html_orders_details .= '
            <thead>
                <tr>
                    <th>Order details #</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <td colspan="5" align="center">
                    Bạn chưa có đơn hàng nào!
                </td>
            </tbody>
            </table>';
    }

    return $html_orders_details;
}


