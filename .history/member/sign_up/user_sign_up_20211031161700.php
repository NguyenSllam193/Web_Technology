<?php
include "config.php";
if(isset($_POST['register']) && $_POST["user_name"] != '' && $_POST["user_pass"] != '' && $_POST["repeat_password"] != '' 
                            && $_POST["user_fullname"] != '' && $_POST["user_email"] != '' && $_POST["user_gender"] != ''
                            && $_POST["user_birth"] != '' && $_POST["user_check"] != ''){
        $user_name = $_POST["user_name"];
        $user_pass = $_POST["user_pass"];
        $repeat_password = $_POST["repeat_password"];
        $user_fullname = $_POST["user_fullname"];
        $user_email = $_POST["user_email"];
        $user_gender = $_POST["user_gender"];
        $user_birth = $_POST["user_birth"];
        $user_check = $_POST["user_check"];
        if($user_pass != $repeat_password){
            echo ("Nhập 2 cái mật khẩu không giống nhau mà đòi đăng ký! Gà.");
            header("location: sign_up.php");
        }
    }
?>