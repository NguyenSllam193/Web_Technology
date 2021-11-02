<?php

$conn = mysqli_connect('localhost','root','','web');

if($conn){
    mysqli_query($conn, "SET NAME 'utf8'");
}else{
    echo "Kết nối thất bại!".mysqli_connect_error();
}
?>