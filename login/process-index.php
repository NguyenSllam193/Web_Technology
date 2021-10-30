<?php
        session_start(); //Công ty dịch vụ Bảo vệ

        if(isset($_POST['sbmGuiDi'])){
            $username = $_POST['user_name'];
            $password = $_POST['user_pass'];

            $conn = mysqli_connect('localhost','root','','web_btl');
                if(!$conn){
                    die("Không thể kết nối");
                }

            $sql = "SELECT * FROM tbl_user WHERE user_name='$username' AND user_pass='$password'";
            $result = mysqli_query($conn,$sql);

                if(mysqli_num_rows($result)>0){
                    $_SESSION['loginOK'] = $username;
                        header("Location: check/index.php");
                }else{
                        header("Location: login.php");
                     }
        }
?>