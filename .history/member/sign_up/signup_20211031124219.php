<?php
include ".../header_file.php";
?>
<?php
require('.../config/config.php');
    if (isset($_REQUEST['user_name'])){
    $username = stripslashes($_REQUEST['user_name']);
    $username = mysqli_real_escape_string($conn,$username);

    $fullname = stripslashes($_REQUEST['user_fullname']);
    $fullname = mysqli_real_escape_string($conn,$fullname);

    $email = stripslashes($_REQUEST['user_email']);
    $email = mysqli_real_escape_string($conn,$email);

    $password = stripslashes($_REQUEST['user_pass']);
    $password = mysqli_real_escape_string($conn,$password);

      $repeat_pass =  stripslashes($_REQUEST['user_pass']);
      $repeat_pass = mysqli_real_escape_string($conn,$repeat_pass);

    $gender = stripslashes($_REQUEST['user_gender']);
    $gender = mysqli_real_escape_string($conn,$gender);

    $birthday = stripslashes($_REQUEST['user_birth']);
    $birthday = mysqli_real_escape_string($conn,$birthday);

    if($password === $repeat_pass){
        $query = "INSERT into `tbl_user` (user_name, user_pass, user_fullname, user_email, user_gender, user_birth) VALUES ('$username', '".md5($password)."', '$fullname ','$email', '$gender', '$birthday')";
        $result = mysqli_query($conn,$query);
        if($result){
             echo "<div class='form'><h3>Bạn đã đăng ký thành công</h3><br/>Click để <a href='.../login/login.php'>Đăng nhập</a></div>";
         }
      }else{echo "alert('sai con me may mat khau roi')";}

    }else{
?>
  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
              <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>



              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  <form class="mx-1 mx-md-4" method="post" class="form">
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="user_name">Your Name</label>
                        <input type="text" id="user_name" name="user_name" class="form-control" />
                      </div>
                    </div>


                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  <form class="mx-1 mx-md-4" method="post" class="form">
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="user_fullname">Full Name</label>
                        <input type="text" id="user_fullname" name="user_fullname" class="form-control" />
                      </div>
                    </div>


                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="user_email">Your Email</label>
                        <input type="email" id="user_email" name ="user_email" class="form-control" />
                      </div>
                    </div>


                    <tr>
                    <td>
                        Giới tính :
                    </td>
                    <td>
                        <select name="user_gender">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </td>
                </tr>




            <div class="input-group">
                <div class="col-md-5">
                    Date Of Birth
                </div>
                <div class="col-md-15">
                    <input type="date" name="user_birth">
                </div>
            </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="user_pass">Password</label>
                        <input type="password" id="user_pass" name="user_pass" class="form-control" />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="password">Repeat your password</label>
                        <input type="password" name = "repeat_pass" id="password" class="form-control" />
                      </div>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                      <label class="form-check-label" for="form2Example3">
                        I agree all statements in <a href="#!">Terms of service</a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg" id="register" name="register">Register</button>
                    </div>

                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                  <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png"
                    class="img-fluid" alt="Sample image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php  } ?>
<?php
include ".../footer_file.php";
?>
