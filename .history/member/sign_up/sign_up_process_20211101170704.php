<?php
include "config.php";
include ".../global.php";

if(isset($_POST['register']) && $_POST["user_name"] != '' && $_POST["user_password"] != '' && $_POST["repeat_password"] != '' 
                            && $_POST["user_fullname"] != '' && $_POST["user_email"] != '' && $_POST["user_gender"] != ''){
        $user_name = $_POST["user_name"];
        $user_password = $_POST["user_password"];
        $repeat_password = $_POST["repeat_password"];
        $user_fullname = $_POST["user_fullname"];
        $user_email = $_POST["user_email"];
        $user_gender = $_POST["user_gender"];
        if($user_password != $repeat_password){
            header("location: sign_up.php");
            mysqli_close($conn);
        }
        $sql = "SELECT * FROM users WHERE us_name = '$user_name'";
        $old = mysqli_query($conn, $sql);
        if(mysqli_num_rows($old) > 0){
            header("location: sign_up.php");
            mysqli_close($conn);
        }
        $sql = "INSERT INTO users (us_name, us_pass, us_fullname, us_gender, us_email) VALUES 
        ('$user_name', '".md5($user_password)."', '$user_fullname ', '$user_gender', '$user_email')";
        mysqli_query($conn, $sql);
        header("location: ../home_page/home_page.php");
        mysqli_close($conn);
    }else{
        header("location: sign_up.php");
        mysqli_close($conn);
    }
?>