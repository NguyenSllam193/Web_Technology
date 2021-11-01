<?php
include "./config/config.php";

if(isset($_POST['btnLogin']) && $_POST["txtAccount"] != '' && $_POST["txtPasswd"] != ''){
    $txtAccount = $_POST['txtAccount'];
    $txtPasswd = $_POST['txtPasswd'];
    
    $sql = "SELECT * FROM admins WHERE ad_name = '$txtAccount' AND ad_pass = '$txtPasswd'";
    $query = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($query);
    if($total > 0){
        header("Location: ./admin/admin_page.php");
        mysqli_close($conn);
    }else{
        header("Location: sign_in.php");
    }

    $sql = "SELECT * FROM admins WHERE ad_name = '$txtAccount' AND ad_pass = '$txtPasswd'";
    $query = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($query);
    if($total > 0){
        header("Location: ./admin/admin_page.php");
        mysqli_close($conn);
    }else{
        header("Location: sign_in.php");
    }
}else{
    header("Location: sign_in.php");
}
?>