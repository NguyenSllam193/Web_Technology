<?php
include "header_file.php";
?>

<section style="background: url(https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png);">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <p class="text-primary text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

              <div class="col-md-12 col-lg-6 col-xl-8 order-2 order-lg-1">
                <form class="mx-1 mx-md-6 form" action="sign_up_process.php" method="POST">
                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="user_name">Your User Name  *</label>
                      <input type="text" id="user_name" name="user_name" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="user_fullname">Full Name  *</label>
                      <input type="text" id="user_fullname" name="user_fullname" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="user_email">Your Email  *</label>
                      <input type="email" id="user_email" name="user_email" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center justify-content-between mb-3">
                    <span>Gender:  *</span>
                        <select name="user_gender">
                          <option value=''>#</option>
                          <option value="Nam">Nam</option>
                          <option value="Nữ">Nữ</option>
                        </select>
                  </div>

                  <div class="input-group justify-content-between mb-3">
                    <div class="col-md-5">
                      Date Of Birth:
                    </div>
                    <div class="col-md-15">
                      <input type="date" name="user_birth">
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="user_password">Password  *</label>
                      <input type="password" id="user_password" name="user_password" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="password">Repeat your password  *</label>
                      <input type="password" name="repeat_password" id="repeat_password" class="form-control" />
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" name="user_check"/>
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg col-md-6" id="register" name="register">Register</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
include "footer_file.php";
?>