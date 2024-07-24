<?php

function load_All_users()
{
    $sql = "SELECT * FROM users order by id desc";
    $list_users = pdo_query($sql);
    return $list_users;
}




function update_khach_hang($id_kh, $ma_kh, $ho_ten, $mat_khau, $email, $hinh)
{
    if ($hinh != "") {
        $sql = "UPDATE khach_hang SET ma_kh ='" . $ma_kh . "', ho_ten ='" . $ho_ten . "', mat_khau ='" . $mat_khau . "',  email ='" . $email . "',  hinh ='" . $hinh . "' WHERE id_kh=" . $id_kh;
    } else {
        $sql = "UPDATE khach_hang SET ma_kh ='" . $ma_kh . "', ho_ten ='" . $ho_ten . "', mat_khau ='" . $mat_khau . "',  email ='" . $email . "' WHERE id_kh=" . $id_kh;
    }
    pdo_execute($sql);
}



function add_users($usr_email, $username, $password, $avatar, $fullname, $phone, $usr_address)
{
    $sql = "INSERT INTO users(usr_email, username, password, avatar, fullname, phone, usr_address) VALUES('$usr_email','$username','$password', '$avatar', '$fullname','$phone', '$usr_address')";
    echo "<script>alert('Bạn đã đăng ký tài khoản thành công!')</script>";
    pdo_execute($sql);
}
function check_user($username, $password)
{
    $sql = "select * from users where username = '$username' && password = '$password'";
    $result = pdo_query($sql);
    $user = pdo_query_value($sql);
    if ($user) {
        if (password_verify($password, $user["password"])) {
            header("location:index.php");
            die();
        } else {
            echo "<script type='text/javascript'>alert('Mật khẩu sai');window.location.href";
        }
    } else {
        echo "<div class='alert alert-danger'>Tài khoản không tồn tại</div>";
    }
}

function send_mail($email, $newpass)
{
    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/SMTP.php";
    require 'PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'ntbinh14122004@gmail.com'; // SMTP username
        $mail->Password = 'qhhvnflcocqmkhzk';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('ntbinh14122004@gmail.com', 'Bình Ngô (FPT)');
        $mail->addAddress($email);
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư gửi lại mật khẩu';
        $noidungthu = "<p>Bạn nhận được thư này, do bạn hoặc ai đó yêu cầu mật khẩu mới từ website Prometheus,</p>
    Mật khẩu mới của bạn là :  {$newpass};
    ";

        $mail->Body = $noidungthu;
        $mail->smtpConnect(
            array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            )
        );
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
        return false;
    }
}


function update_user($id, $username, $avatar, $fullname, $phone, $usr_address)
{
    if ($avatar != "") {
        $sql = "UPDATE users SET username= '". $username ."', avatar='". $avatar ."', fullname='". $fullname ."', phone='". $phone ."', usr_address='". $usr_address ."' WHERE id=" . $id;
    } else {
        $sql = "UPDATE users SET username= '". $username ."', fullname='". $fullname ."', phone='". $phone ."', usr_address='". $usr_address ."' WHERE id=" . $id;
    }
    pdo_execute($sql);
}


function update_PassUser($id, $password_New)
{
    $sql = "UPDATE users SET password=? WHERE id=?";
    echo "<script>alert('Bạn đã Cập Nhật Mật Khẩu thành công!')</script>";

    pdo_execute($sql, $password_New, $id);
}

function get_user($id)
{
    $sql = "SELECT * FROM users where id=?";
    $result = pdo_query_one($sql, $id);
    return $result;
}

function check_email_username($usr_email)
{
    $sql = "SELECT usr_email as email_db , username as username_db
    FROM users
    WHERE usr_email = '" . $usr_email . "' ";

    // $sql = "SELECT usr_email as email_db , username as username_db FROM users WHERE 1 ";
    // if ($usr_email != "") {
    //     $sql .= " and usr_email LIKE '%" . $usr_email . "%'";
    // }
    // if ($username != "") {
    //     $sql .= " or username LIKE '%" . $username . "%'";
    // }
    // $sql .= " order by email_db desc";
    $result = pdo_query($sql);
    return $result;
}

function update_info($address, $phone, $id){
    $sql = "UPDATE users
    SET usr_address = ?, phone = ?
    WHERE id = ?";
    pdo_execute($sql, $address, $phone, $id);
}
