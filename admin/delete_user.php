<?php

$us_id = $_GET['us_id'];

$conn = mysqli_connect('localhost','root','','web');

$sql_1 = "DELETE From posts WHERE us_id = '$us_id' ";

$res_1 = mysqli_query($conn, $sql_1);

if($res_1==true){
    $sql_2 = "DELETE From users WHERE us_id = '$us_id' ";

    $res_2 = mysqli_query($conn, $sql_2);
    
    if($res_2==true){
    header("Location:admin_page.php");        
    }
}

?>