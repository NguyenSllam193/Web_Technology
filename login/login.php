<?php
include "../header_file.php";
?>


<?php
  require('../config/config.php');
//   session_start();
    if (isset($_POST['username'])){

    $username = stripslashes($_REQUEST['user_name']);
    $username = mysqli_real_escape_string($conn,$username);
    $password = stripslashes($_REQUEST['user_pass']);
    $password = mysqli_real_escape_string($conn,$password);
        $query = "SELECT * FROM `tbl_user` WHERE user_name='$username' and user_pass='".md5($password)."'";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['user_name'] = $username;
      header("Location: index.php");
            }else{
?>
            <script type='text/javascript'>alert('mật khẩu sai cmmr');</script>
<?php       }
    }else
?>





    <div class="container-fluid vh-100">
        <div class="" style="margin-top:200px">
            <div class="rounded d-flex justify-content-center">
                <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                    <div class="text-center">
                        <h3 class="text-primary">Sign In</h3>
                    </div>
                    <form action="">
                        <div class="p-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-primary"><i
                                        class="bi bi-person-plus-fill text-white"></i></span>
                                <input type="text" name="user_name" class="form-control" placeholder="Tên Đăng Nhập">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-primary"><i
                                        class="bi bi-key-fill text-white"></i></span>
                                <input type="password"  name="user_pass" class="form-control" placeholder="password">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label>
                            </div>
                            <button class="btn btn-primary text-center mt-2" type="submit">
                                Login
                            </button>
                            <p class="text-center mt-5">Don't have an account?
                                <span class="text-primary">Sign Up</span>
                            </p>
                            <p class="text-center text-primary">Forgot your password?</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
include "../footer_file.php";
?>
