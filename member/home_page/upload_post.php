<?php

if(isset($_POST['submit'])){

$text = $_POST['post'];
$img = $_FILES['hinhanh']['name'];

if ($text == ""){
    ?>
<script language="javascript">
alert("Bạn chưa nhập gì");
</script>
<?php
} else{
    $target_dir = "images/";
    $target_file = $target_dir . basename($img);
    move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file);

    $sql_1 = " INSERT INTO posts
    VALUES (NULL,'$text','','$img','','$id', NULL)";

    $res_1 = mysqli_query($conn, $sql_1);

        if($res_1>0){
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
        }
    }
}
?>