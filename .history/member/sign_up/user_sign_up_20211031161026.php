<?php
include "config.php";
if(isset($_POST['register']) && $_POST["user_name"] != '' && $_POST["user_pass"] != '' && $_POST["repeat_password"] != '' 
                            && $_POST["user_fullname"] != '' && $_POST["user_email"] != '' && $_POST["user_gender"] != ''
                            && $_POST["user_birth"] != '' && $_POST["user_check"] != '')
?>