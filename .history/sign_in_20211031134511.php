<?php
include "./header_file.php";
?>

    <div class="container-fluid vh-100">
        <div class="" style="margin-top:200px">
            <div class="rounded d-flex justify-content-center">
                <div class="col-md-6 col-sm-12 shadow-lg p-5 bg-light">
                    <div class="text-center">
                        <h2 class="text-primary text-both">Sign In</h2>
                    </div>
                    <form action="" method="post">
                        <div class="p-4">
                            <div class="input-group mb-4">
                                <span class="input-group-text bg-primary"><i
                                        class="bi bi-person-plus-fill text-white"></i></span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text bg-primary"><i
                                        class="bi bi-key-fill text-white"></i></span>
                                <input type="password" class="form-control" placeholder="password">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label>
                            </div>
                            <button class="btn btn-primary text-center mt-4 col-md-12" type="submit">
                                Login
                            </button>
                            <p class="text-center mt-5">Don't have an account?
                                <a href="./member/sign_up/signup.php" class="text-primary">Sign Up</a>
                            </p>
                            <p class="text-center text-primary">Forgot your password?</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
include "./footer_file.php";
?>