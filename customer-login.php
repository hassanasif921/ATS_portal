<?php	
session_start();
include("connection_db.php");

if(isset($_POST["btn_login"]))
{

	mysqli_select_db($connection,"ats_databasenew");
	$user_name = $_POST["username"];
	$user_password = $_POST["password"];

	$query = mysqli_query($connection,"select * from ats_customer_signup where ats_customer_signup_name ='".$user_name."'");
	$row = mysqli_fetch_array($query);
	
	if($row ["ats_customer_signup_name"] == $user_name && $row ["ats_customer_signup_password"] == $user_password)
	{
        $_SESSION["userName"] = $row["ats_customer_signup_name"];
        $_SESSION["user_id"] = $row["ats_customer_signup_id"];
		header("Location:index.php");
	}
	else
	{
		echo '<script type="text/javascript"> alert("Invalid UserName or Password")</script>';
        // $result = "Invalid Username and Password";
	}
	
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
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/japan3.jpeg');"></div>
                                        <div class="slider-content">
                                            <h3>Best Quality Cars</h3>
                                            <p>ArchitectUI is like a dream. Some think it's too good to be true! Extensive
                                                collection of unified React Boostrap Components and Elements.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/japan4.jpeg');"></div>
                                        <div class="slider-content">
                                            <h3>Customer Support 24/7</h3>
                                            <p>Easily exclude the components you don't require. Lightweight, consistent
                                                Bootstrap based styles across all elements and components
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/japan5.jpeg');"></div>
                                        <div style="color: black;" class="slider-content">
                                            <h3>Fastest Shipment</h3>
                                            <p>We've included a lot of components that cover almost all use cases for any type of application.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4 style="margin-top: -4%;" class="mb-0">
                                <span class="d-block">Welcome back</span>
                                <span>Please sign in to your account.</span>
                            </h4>
                            <h6 class="mt-3">No account? <a href="pages-register.php" class="text-primary">Sign up now</a></h6>
                            <div class="divider row"></div>
                            <div>
                                <form class="" action="" method="post">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail" class="">Username</label>
                                                <input name="username" id="username" placeholder="Enter Your Username" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="examplePassword" class="">Password</label>
                                                <input name="password" id="password" placeholder="Enter Your Password" type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-check">
                                        <input name="check" id="keep_me_login_checkbox" type="checkbox" class="form-check-input">
                                        <label for="exampleCheck" class="form-check-label">Keep me logged in</label>
                                    </div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                    <label style="color:red;"><?php //echo $result ?></label>
                                        <div class="ml-auto">
                                            <input type="submit" name="btn_login" id="btn_login" style="background-color: #ff9900; border-style: none;" class="btn btn-primary btn-lg" value="Login">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="assets/scripts/main.d810cf0ae7f39f28f336.js"></script></body>


</html>