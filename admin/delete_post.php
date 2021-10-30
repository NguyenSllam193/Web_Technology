<?php

$conn = mysqli_connect('localhost','root','','web');

$po_id = $_GET['po_id'];

$sql = "DELETE From posts WHERE po_id = '$po_id' ";

$res = mysqli_query($conn, $sql);

if($res==true){
    header("Location:admin_page.php");
}

?>