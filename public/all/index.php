<?php require_once('../../private/initialize.php');

if(is_post_request()) {
$student=[];
$student['id'] = isset($_POST['id']) ? $_POST['id'] : '';
$student['name'] = isset($_POST['name']) ? $_POST['name'] : '';
$student['email'] = isset($_POST['email']) ? $_POST['email'] : '';
$student['section'] = isset($_POST['section']) ? $_POST['section'] : '';
$student['password'] = isset($_POST['password']) ? $_POST['password'] : '';
$result=insert_student($student);
if($result===true) {
  redirect_to(url_for('/all/index.php'));
}else{
$errors=$result;
}
}else{
//   redirect_to(url_for('/staff/subjects/new.php'));
}



?>



<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo url_for('/images/icons/favicon.ico');?>"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/vendor/bootstrap/css/bootstrap.min.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/vendor/animate/animate.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/vendor/css-hamburgers/hamburgers.min.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/vendor/select2/select2.min.css');?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('css/util.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/css/main.css');?>">
    <!--===============================================================================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="<?php echo url_for('/stylesheets/css/css2/font-awesome.min.css');?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo url_for('/stylesheets/css/css2//popuo-box.css');?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo url_for('/stylesheets/css/css2/style.css');?>" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="<?php echo url_for('/images/img-01.png');?>" alt="IMG">
            </div>

            <form class="login100-form validate-form">
					<span class="login100-form-title">
						 Login
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input"  data-validate = "Password is required">
                    <input class="input100" type="password" name="password"  placeholder="              Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">

						<span class="txt1">
							Forgot
						</span>
                    <a class="txt2" href="#">
                        Username\ / Password?
                    </a>
                </div>
            </form>

                <div class="text-center p-t-136">
                    <p class="p-bottom-w3ls">Are you new to this?<a class="w3_play_icon1" href="#small-dialog1">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </p>

                    <div id="small-dialog1" class="mfp-hide">
                        <div class="contact-form1">
                            <div class="contact-w3-agileits">
                                <h3>Register Form</h3>
                                <form action="<?php echo url_for('/all/index.php');?>" method="post">
                                    <div class="form-sub-w3ls">
                                        <input placeholder="Id"  name="id" type="text" required="">
                                        <div class="icon-agile">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>

                                        <div class="form-sub-w3ls">
                                            <input placeholder="Name"  name="name" type="text" required="">
                                            <div class="icon-agile">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </div>

                                        </div>
                                        <div class="form-sub-w3ls">
                                            <input placeholder="Section"  name="section" type="text" required="">
                                            <div class="icon-agile">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </div>

                                        </div>
                                    <div class="form-sub-w3ls">
                                        <input placeholder="Email" class="mail" type="email" name="email" required="">
                                        <div class="icon-agile">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="form-sub-w3ls">
                                        <input placeholder="Password" name="password" type="password" required="">
                                        <div class="icon-agile">
                                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="form-sub-w3ls">
                                        <input placeholder="Confirm Password" name="password" type="password" required="">
                                        <div class="icon-agile">
                                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                        </div>
                                    </div>
                            </div>
                            <div class="login-check">
                                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><p>I Accept Terms & Conditions</p></label>
                            </div>
                            <div class="submit-w3l">
                                <input type="submit" value="Register">
                            </div>
            </form>
        </div>
    </div>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="<?php echo url_for('/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
<script src="<?php echo url_for('vendor/bootstrap/js/popper.js');?>"></script>
<script src="<?php echo url_for('/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
<script src="<?php echo url_for('vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
<script src="<?php echo url_for('vendor/tilt/tilt.jquery.min.js');?>"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="<?php echo url_for('js/main.js');?>"></script>
<script type="text/javascript" src="<?php echo url_for('/js/js2/jquery-2.1.4.min.js');?>"></script>
<!-- pop-up-box -->
<script src="<?php echo url_for('/js/js2/jquery.magnific-popup.js" type="text/javascript');?>"></script>
<!--//pop-up-box -->
<script>
    $(document).ready(function() {
        $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>

</body>
</html>