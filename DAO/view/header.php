<?php
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);
        $html_account='<a href="index.php?pg=myaccount">'.$username.'</a>
        <a href="index.php?pg=logout">Thoát</a>';

    }else{
        $html_account='<a href="index.php?pg=dangky">ĐĂNG KÝ</a>
        <a href="index.php?pg=dangnhap">ĐĂNG NHẬP</a>';
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="layout/images/logo.png">

    <title>Coffe House</title>
    <link rel="stylesheet" href="layout/css/style.css">
</head>

<body>
    <div class="containerfull padd20">
        <div class="container">
            <div class="logo col2"><img src="layout/images/logo.png" height="" alt=""></div>
            <div class="menu col8">
                <div class="col3">
                    <form action="index.php?pg=sanpham" class="form_display" method="post">
                        <input type="text" name="kyw" id="" placeholder="Nhập từ khóa tìm kiếm theo tên">
                        <input type="submit" name="timkiem" value="Tìm kiếm">
                    </form>
                </div>
                <div class="col9">
                    <a href="index.php">TRANG CHỦ</a>
                    <!-- <a href="index.php?pg=gioithieu">GIỚI THIỆU</a> -->
                    <a href="index.php?pg=sanpham">SẢN PHẨM</a>
                    <!-- <a href="index.php?pg=dichvu">DỊCH VỤ</a>-->
                    
                    <a href="index.php?pg=viewcart">Giỏ hàng</a>
                    <?=$html_account;?>
                </div>
                
                
            </div>
        </div>
    </div>