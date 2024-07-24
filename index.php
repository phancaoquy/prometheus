<?php
session_start();
ob_start();
include "models/pdo.php";
include "models/func_books.php";
include "models/func_categories.php";
include "models/func_orders.php";
include "models/conn.php";
include "models/func_user.php";




if (isset($_SESSION["users"])) {
    header("location: views/header.php");
}

include_once "views/header.php";


// if (isset($_COOKIE['siteAuth'])) {
//     parse_str($_COOKIE[$cookie_name], $myArray);
//     extract($myArray);
//     var_dump($myArray);
//     echo $usernameRe;
// }


// if (empty($_SESSION['username'])) {
//     if (isset($cookie_name)) {
//         if (isset($_COOKIE[$cookie_name])) {
//             parse_str($_COOKIE[$cookie_name], $myArray);
//             extract($myArray);
//             var_dump($myArray);
//             // $sql2 = "select * from users where username='$usernameRe' and password='$passwordRe'";
//             // $result2 = mysql_query($sql2, $dbconect);
//             $sql3 = "select * from users where username='$usernameRe' and password='$passwordRe'";
//             $result3 = pdo_query($sql3);
//             if ($result3) {
//                 //header('location:index.php');
//                 echo "Tự Động Đăng Nhập Thành Công";

//                 exit;
//             }
//             // echo "tồn tại côkirnwuax";
//         }
//     }
// } else {
//     header('location:index.php'); //chuyển qua trang đăng nhập thành công
//     exit;
// }


if (isset($_GET['pgs']) && ($_GET['pgs'] != "")) {
    $pgs = $_GET['pgs'];
    switch ($pgs) {
        case 'books':

            $categs_list = query_categories();
            $lang_list = query_language();

            $keyword = "";
            $titlepage = "";

            if (!isset($_GET['categ_id'])) {
                $categ_id = 0;
            } else {
                $categ_id = $_GET['categ_id'];
                $titlepage = get_categ_name($categ_id);
            }

            $books_list = get_books_list($keyword, $categ_id, 12);

            include "views/books.php";
            break;
        case 'eBooks':

            $categs_list = query_categories();
            $lang_list = query_language();

            $keyword = "";
            $titlepage = "";

            if (!isset($_GET['categ_id'])) {
                $categ_id = 0;
            } else {
                $categ_id = $_GET['categ_id'];
                $titlepage = get_categ_name($categ_id);
            }

            $books_list = get_books_list($keyword, $categ_id, 12);

            include "views/eBooks.php";
            break;
        case 'audioBooks':

            $categs_list = query_categories();
            $lang_list = query_language();

            $keyword = "";
            $titlepage = "";

            if (!isset($_GET['categ_id'])) {
                $categ_id = 0;
            } else {
                $categ_id = $_GET['categ_id'];
                $titlepage = get_categ_name($categ_id);
            }

            $books_list = get_books_list($keyword, $categ_id, 12);

            include "views/audioBooks.php";
            break;
        case 'productDetail':
            $categs_list = query_categories();
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                $id = $_GET["id"];
                $au_id = get_au_id($id);
                view_count($id);

                $releted_au_list = get_related_product($id, $au_id, 4);
                $get_book_images = get_books_images($id);
                $book_details = get_product_details($id);

                include "views/productDetail.php";
            } else {
                include "views/home.php";
            }

            break;
        case 'blog':
            include "views/blog.php";
            break;
        case 'contact':
            include "views/contact.php";
            break;
        case 'shop-cart':
            include "views/shop-cart.php";
            break;
        case 'checkout':

            include "views/checkout.php";
            break;
        case 'order':
            extract($_SESSION["user"]);
            //include "controllers/process.php";
            include "controllers/total_order.php";
            $date = new DateTime("now", new DateTimeZone('Asia/Ho_Chi_Minh'));
            $result = $date->format('YmdHis');
            $order_code = $username . rand(0, 999999) . $result;


            $delivery_note = $_POST["delivery_note"];
            $payment_method = $_POST["payment_method"];
            $user_id = $id;

            $errors = array();
            if (empty($_SESSION["shopping_cart"])) {
                $errors[] = "Chưa có đơn hàng*";
                include "views/checkout.php";
            }
            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] === "POST") {

                // Validate Address
                $address = trim($_POST["address"]);
                if (empty($address)) {
                    $errors[] = "Nhập địa chỉ giao hàng*";
                }

                // Validate Phone
                $phone = trim($_POST["phone"]);
                if (empty($phone)) {
                    $errors[] = "Nhập số điện thoại*";
                } elseif (!preg_match('/^0[0-9]{9}$/', $phone)) {
                    $errors[] = "Số điện thoại không đúng*";
                }

                // Validate Payment Method
                $paymentMethod = $_POST["payment_method"];
                if (empty($paymentMethod)) {
                    $errors[] = "Chọn phương thức thanh toán*";
                }

                // Validate Delivery Note
                $deliveryNote = trim($_POST["delivery_note"]);

                // If there are no errors, you can proceed with processing the form
                if (empty($errors)) {
                    update_info($address, $phone, $id);
                    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                        $book_id = (int) $values["product_id"];
                        $quantity = (int) $values["product_quantity"];
                        upload_order($user_id, $book_id, $quantity, $order_code);
                    }
                    if ($payment_method = 1) {
                        $payment_status = 0;
                    } else {
                        $payment_status = 1;
                    }
                    upload_order_details($delivery_note, $payment_status, $totalPrice, $order_code, $payment_method);
                    $_SESSION["shopping_cart"] = [];

                    $order_list = fetch_orders($user_id);
                    if (!empty($order_list)) {
                        foreach ($order_list as $order_code) {

                        }
                    } else {
                        $order_list = '';
                    }
                    include "views/orderList.php";
                    break;
                } else {

                    include "views/checkout.php";
                    break;
                }
            }
            break;

        case 'orderList':
            extract($_SESSION['user']);
            $user_id = $id;
            $user_id = $id;
            $order_list = fetch_orders($user_id);

            // Initialize an array to store order details

            if (!empty($order_list)) {
                foreach ($order_list as $order_code) {
                }
            } else {
                $order_list = '';
            }

            // Pass the data to the view file
            include "views/orderList.php";
            break;

        case 'orderDetails':
            if (isset($_GET["order_code"])) {
                $order_code = $_GET["order_code"];
                $order_Details = fetch_order_details($order_code);
                if (!empty($order_Details)) {

                    include "views/orderDetails.php";
                } else {
                    $order_Details = "";
                    include "views/orderDetails.php";
                }
            }

            break;

        case 'rememberAcccount':
            if (empty($_SESSION['username'])) {
                if (isset($cookie_name)) {
                    if (isset($_COOKIE[$cookie_name])) {
                        parse_str($_COOKIE[$cookie_name], $myArray);
                        extract($myArray);
                        $sql3 = "select * from users where username='$usernameRe' and password='$passwordRe'";
                        $result3 = pdo_query($sql3);

                        $query = $conn->prepare('SELECT * FROM users WHERE username = :usernameRe');
                        $query->bindValue(':usernameRe', $usernameRe);
                        $query->execute();
                        $user = $query->fetch(PDO::FETCH_ASSOC);

                        if ($result3) {

                            $_SESSION['user'] = $user;
                            header('location: index.php');
                            echo "Tự Động Đăng Nhập Thành Công";
                            exit;
                        }
                        // echo "tồn tại côkirnwuax";
                    }
                }
            } else {
                // header('location:index.php'); //chuyển qua trang đăng nhập thành công
                exit;
            }
            include "views/rememberAccount.php";
            break;

        case 'logout':
            include "views/logout.php";
            break;
        case 'login':
            if (isset($_POST["btn_sign_in"])) {
                //  include "models/conn.php"
                $username = $_POST["username"];
                $password = $_POST["password"];
                $check_remember = ((isset($_POST['check_remember']) != 0) ? 1 : "");
                // check_user($username, $password);   
                $query = $conn->prepare('SELECT * FROM users WHERE username = :username');
                $query->bindValue(':username', $username);
                $query->execute();
                $user = $query->fetch(PDO::FETCH_ASSOC);
                $errorLogin = "";

                if ($username == "" || $password == "") {
                    $errorLogin = "Vui Lòng Nhập Đầy Đủ Thông Tin !!!";
                } else {
                    if ($user) {
                        if (md5($password) == $user['password']) {
                            $_SESSION['user'] = $user;
                            $usernameRe = $user['username'];
                            $passwordRe = $user['password'];
                            if ($check_remember == 1) {
                                setcookie($cookie_name, 'usernameRe=' . $usernameRe . '&passwordRe=' . $passwordRe, time() + $cookie_time);
                                header('location: index.php');
                            }
                            header('location: index.php');
                        } else {
                            //echo $password;
                            $errorLogin = "Mật khẩu sai !";
                            //echo $user['password'];
                        }
                    } else {
                        $errorLogin = "Tài Khoản Không Tồn Tại !";
                    }
                }
            }
            include "views/login.php";
            break;
        case 'register':

            if (isset($_POST["btn_sign_up"])) {
                if (isset($_POST['check_dieukhoan'])) {
                    $usr_email = $_POST['usr_email'];
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);

                    $avatar = $_FILES['avatar']['name'];
                    $target_dir = "publics/img/user/";
                    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
                    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                    }


                    $fullname = $_POST['fullname'];
                    $phone = $_POST['phone'];
                    $usr_address = $_POST['usr_address'];


                    //var_dump($check_usr_email_username);
                    $error = "";

                    if ($usr_email == "" || $username == "" || $password == "" || $fullname == "" || $phone == "") {
                        $error = "Vui Lòng Nhập Đầy Đủ Thông Tin !!!";
                    } else {
                        //$check_usr_email_username = check_email_username($usr_email);
                        $sql = "SELECT  * FROM users WHERE usr_email = ? or username = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute([$usr_email, $username]);
                        $count = $stmt->rowCount();
                        if ($count > 0) {
                            $error = " Tài Khoản Đã Tồn Tại !";
                        } else {
                            add_users($usr_email, $username, $password, $avatar, $fullname, $phone, $usr_address);
                            header("location:index.php");
                            $register_Success = "Đăng Ký Thành Công !";
                        }
                    }
                } else {
                    $error = "Bạn Chưa Chấp Nhận Điều Khoản !";
                }
            }



            include "views/register.php";
            break;
        case 'forgotpass':
            if (isset($_POST['btn_reset'])) {
                $email = $_POST['usr_email'];

                //kiểm tra email trong db
                $sql = "SELECT  * FROM users WHERE usr_email = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$email]);
                $count = $stmt->rowCount();

                if ($count == 0) {
                    $loi = "Email bạn nhập chưa đăng ký thành viên với chúng tôi";
                } else {
                    echo $newpass = substr(rand(0, 9999), 0, 8);
                    $passmd5 = md5($newpass);
                    $sql = "UPDATE users SET password = ? WHERE usr_email = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$passmd5, $email]);
                    // echo "Đã cập nhật";
                    $kq = send_mail($email, $newpass);
                    if ($kq == true) {
                        echo "<script>document.location='./views/thongbao.php';</script>";
                    }
                }
            }
            //$email = $_POST['usr_email'];
            if (isset($email) == true) {
                $email;
            }
            include "views/forgotpass.php";
            break;
        case 'updateuser':
            if (isset($_POST["btn_updateuser"])) {
                $id = $_POST['id'];
                //$password = $_POST['$password'];
                $username = $_POST['username'];
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $usr_address = $_POST['usr_address'];
                $avatar = $_FILES['avatar']['name'];
                $target_dir = "publics/img/user/";
                $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                }

                $sql = "SELECT  * FROM users WHERE username = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$username]);
                $userAll = $stmt->rowCount();
                var_dump($userAll);
                if ($userAll > 0) {
                    $error = "Tên tài khoản đã tồn tại, hãy thử tên tài khoản khác !";
                } else {
                    update_user($id, $username, $avatar, $fullname, $phone, $usr_address);
                    $update_Success = "Cập Nhật Thành Công !";
                }
                // extract($userAll);
                //var_dump($userAll);
                //echo $userAll['username'];
                //var_dump($userAll);
                //echo $userAll['username'];
                // if($user_updatepass['username'] == $userAll['username']) {
                //     echo "tên tài khoản đã tồn tại";
                // }

            }

            include "views/updateuser.php";
            break;

        case 'updatePass':
            if (isset($_POST["btn_updatePass"])) {
                $password = $_POST['password'];
                $password_New = $_POST['password_New'];
                $password_Confirm = $_POST['password_Confirm'];
                //echo $id;
                $query = $conn->prepare('SELECT * FROM users WHERE id = :id');
                $query->bindValue(':id', $id);
                $query->execute();
                $user_updatepass = $query->fetch(PDO::FETCH_ASSOC);
                $error = "";
                var_dump($user_updatepassA);



                if ($password != "") {
                    if ($user_updatepass) {  // kiểm tra mảng user có tồn tại
                        if (md5($password) == $user_updatepass['password']) { //  kiểm tra mk hiện tại
                            if ($password_New != "") {
                                if ($password_Confirm != "") {
                                    if ($password_New == $password_Confirm) {
                                        $passNew_db = md5($password_New);
                                        update_PassUser($id, $passNew_db);
                                        $update_Success = "Cập Nhật Mật Khẩu Thành Công !!!";
                                    } else {
                                        $error = " Mật khẩu mới không trùng với mật khẩu xác nhận !";
                                    }
                                } else {
                                    $error = " Vui Lòng Xác Nhận Mật Khẩu Mới !";
                                }
                            } else {
                                $error = " Vui lòng nhập mật khẩu mới !";
                            }
                        } else {
                            $error = " Mật khẩu không khớp !";
                        }
                    }
                } else {
                    $error = " Vui lòng nhập mật khẩu hiện tại !";
                }
            }
            include 'views/updatePass.php';
            break;


        default:
            include "views/home.php";
            break;
    }
} else {
    include "views/home.php";
}

include "views/footer.php";
ob_end_flush();
