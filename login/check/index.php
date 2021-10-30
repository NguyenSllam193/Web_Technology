

<?php
// session_start(); //Dịch vụ bảo vệ
//     if(!isset($_SESSION['loginOK'])){
//         header("Location:../login.php");
//     }
    include("../../signup/auth.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Xin chào <?php echo $_SESSION['user_name']; ?>!</p>
<p>Đây là trang chủ, ai đăng nhập được mới nhìn thấy</p>
<p><a href="dashboard.php">Bảng điều khiển</a></p>
<a href="logout.php">Đăng xuất</a>
</div>
<!-- <form action="process-index.php" method="POST">
        Email: <input type="text" name="user_mail">
        Password: <input type="text" name="user_pass">
        <button type="submit" name="sbmGuiDi">Gửi đi</button>
    </form> -->
</body>
</html>