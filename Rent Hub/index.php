<?php
require 'pages/head.php';
session_start();
?>
<title>SignUp</title>
<link rel="icon" type="image/x-icon" href="images/favicon.png">
<link rel="stylesheet" href="css/stylesheet.css">
<script src="js/script.js"></script>
<style>
* {
  margin: 0;
  width: 100%;
  padding: 0;
}
.row {
  --bs-gutter-x: 0 !important ;
}
</style>
</head>
    <body>
        <div class="row">
            <div class="col-md-6 d-none row d-md-flex justify-content-center d-md-block left_div">
            <img class="logo_img_left" src="images/logo.png" alt="">
            </div>

            <div class="col-md-6 right_div d-flex justify-content-center align-items-center">
                
                <div class="form_div w-75 mx-auto">

                <div class="logo_img text-center d-block d-md-none"><img src="images/logo.png" class="fav"  alt=""></div>
                    <form class="form_valid" id="signup" action="backend/signuplogic.php" method="POST" autocomplete="off">
                        <h3 class="text-center text-light">Sign Up</h3>
                        <div class="my-4 form_input "><input type="text" class="form-control" placeholder="Full Name" name="name" ></div>
                        <div class="my-4 form_input"><input type="email" class="form-control" placeholder="Email" name="email" ></div>

                        <div class="my-4 form_input"><input type="tel" class="form-control" placeholder="Phone" name="phone" ></div>

                        <div class="my-4 form_input"><input type="password" class="form-control" placeholder="Password" name="password" id="password">
                        </div>

                        <div class="my-4 form_input"><input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" >
                        </div>

                        <div class="form_input pt-4 text_center">
                        <button type="submit" class="btn_submit" name="register_button">Submit</button>
                        <p class="sign_in_line mt-3">Already have an account?  <a href="pages/login.php">Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
if (isset($_SESSION["submit"])) {
 
if ($_SESSION["submit"]==1) {
 ?>

<script type="text/javascript">
	alert('Registered Successfully');
	window.location.href ='pages/login.php';
	
</script>

<?php session_destroy();

} ?>


<?php 
if ($_SESSION["submit"]==0) {
 ?>

<script type="text/javascript">
	alert('Email already exists');
</script>

<?php 
session_destroy();
} } 
?>