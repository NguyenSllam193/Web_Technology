<?php
    session_start(); //Dịch vụ bảo vệ
    if(!isset($_SESSION['loginOK'])){
        header("Location:../user?index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Administration - Vùng quản trị, chỉ ai có quyền mới nhìn thấy</h2>

    <a href="logout.php">Thoát</a>
</body>
</html>