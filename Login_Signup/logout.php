<?php 

session_start();
if(isset($_SESSION['ok'])){
    unset($_SESSION['ok']);
    header("Location: login.php");
}

?>