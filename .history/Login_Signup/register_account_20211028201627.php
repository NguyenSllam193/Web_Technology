<?php
    $user_name = $_POST['user_name'];
    $email_user = $_POST['email_user'];
    $passwd_user = ['passwd_user'];

    include '../config/config.php';
    $sql = "INSERT INTO user (user_name, email_user, passwd_user) VALUES ()

    $result = mysqli_query($conn, $sql);
    if($result > 0){
        header("Location:../index.php");
    }else{
        echo "Lỗii";
    }
    mysqli_close($conn);
?>
