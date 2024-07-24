<?php

    include "dao/pdo.php";
    include "dao/user.php";


    if(!isset($_GET['pg'])){

        $html_svlist = show_sv(20);
        include "view/dangky.php";

    }else{
        switch ($_GET['pg']) {
            case 'adduser':
                // xác định giá trị input
                if(isset($_POST["add"])&&($_POST["add"])){
                    $name=$_POST["name"];
                    $birthday=$_POST["birthday"];
                    $mark=$_POST["mark"];
                    $ap = "";
                    if($mark <= 5 && $mark > 0) {
                        $ap = "Average";
                    } else if ($mark <= 8) {
                        $ap = "Fine";
                    } else {
                        $ap = "Good";
                    }
                    echo $ap;
             
                    user_insert($name, $birthday, $mark, $ap);
                    $alert='Thêm Sinh viên mới thành công!';
                }

                // 
                include "view/dangky.php";
                break;
              
            default:
                
                include "view/dangky.php";
                break;
        }
    }
    


?>