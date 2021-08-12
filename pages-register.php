<?php
include("connection_db.php");

if (isset($_POST["btn_signup"])) {
$customer_name = $_POST["customer_name"];
$customer_company_name = $_POST["customer_company_name"];
$customer_email = $_POST["customer_email"];
$customer_phone = $_POST["customer_phone"];
$customer_password = $_POST["customer_password"];
$customer_password_repeat = $_POST["customer_password_repeat"];
$customer_status = "active";
$customer_createdBy = "username";
$customer_createdAt = time();
$customer_updatedBy = "username";
$customer_updatedAt = time();
$insert = "insert into ats_customer_signup(ats_customer_signup_name,ats_customer_company_name,ats_customer_signup_email,ats_customer_signup_company,ats_customer_signup_number,ats_customer_signup_password,ats_customer_signup_status,ats_customer_signup_createdBy,ats_customer_signup_signup_createdAt,ats_customer_signup_updatedBy,ats_customer_signup_updatedAt)
values('$customer_name','$customer_company_name','$customer_email','$customer_phone','$customer_password','$customer_password_repeat','$customer_status','$customer_createdBy','$customer_createdAt','$customer_updatedBy','$customer_updatedAt')";
   $query = mysqli_query($connection,$insert) or die(mysqli_error($connection));
       echo $query; 
}
?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ATS DASHBOARD - For Employees and Vendors Only </title>
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link href="assets/images/logo-fav.png" rel="icon">
    <link href="main.d810cf0ae7f39f28f336.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.js"></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4>
                                <div style="margin-top: -5%;">Welcome to ATS</div>
                                <span>It only takes a <span class="text-success">few seconds</span> to create your account</span>
                            </h4>
                            <div>
                                <form method="post" onsubmit="">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label class=""><span class="text-danger">*</span> Name</label>
                                                <input name="customer_name" id="customer_name" placeholder="Enter Your Name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label class="">Company Name</label>
                                                <input name="customer_company_name" id="customer_customer_name" placeholder="Enter Your Company Name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label class=""><span class="text-danger">*</span> Email</label>
                                                <input name="customer_email" id="customer_email" placeholder="Enter Your Email" type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label class=""><span class="text-danger">*</span> Phone</label>
                                                <input style="width: 275px;" id="customer_phone" type="tel" name="customer_phone" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label class=""><span class="text-danger">*</span> Password</label>
                                                <input name="customer_password" id="customer_password" placeholder="Password here..." type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label class=""><span class="text-danger">*</span> Repeat Password</label>
                                                <input name="customer_password_repeat" id="customer_password_repeat" placeholder="Repeat Password here..." type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div style="text-align: center;" class="position-relative form-group">
                                                <a style=" background:whitesmoke; color: black; font-weight: 700;" class="mb-2 mr-2 btn-icon btn-shadow btn btn-primary"><img style="margin-top: -4%;" height="23px" width="28px" src="assets/images/google-icon-logo.png">&nbsp; &nbsp; &nbsp;Login with Google</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div style="text-align: center;" class="position-relative form-group">
                                                <a style=" background: white; color: black; font-weight: 700;" class="mb-2 mr-2 btn-icon btn-shadow btn btn-primary"><img style="margin-top: -3%;" height="23px" width="28px" src="assets/images/facebook.png">&nbsp; &nbsp; &nbsp;Login with Google</a>
                                            </div>
                                        </div> 
                                        

                                    </div>
                                    <div class="mt-3 position-relative form-check">
                                        <input name="check" type="checkbox" class="form-check-input">
                                        <label class="form-check-label">Accept our <a href="javascript:void(0);">Terms and Conditions</a>.</label>
                                    </div>
                                    <div class="mt-4 d-flex align-items-center">
                                        <h5 class="mb-0">Already have an account? <a href="pages-login.php" class="text-primary">Sign in</a></h5>
                                        <div class="ml-auto">
                                            <input type="submit" id="btn_signup" name="btn_signup" style="background: #ff9900; color: white;" value="Create Account" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-lg"> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex d-xs-none col-lg-5">
                        <div class="slider-light">
                            <div class="slick-slider slick-initialized">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark"
                                        tabindex="-1">
                                        <div class="slide-img-bg"
                                            style="background-image: url('assets/images/originals/citynights.jpg');"></div>
                                        <div class="slider-content">
                                            <h3>Scalable, Modular, Consistent</h3>
                                            <p>Easily exclude the components you don't require. Lightweight, consistent
                                                Bootstrap based styles across all elements and components
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    const phoneInputField = document.querySelector("#customer_phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
</script>
<script type="text/javascript" src="assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
</body>
</html>