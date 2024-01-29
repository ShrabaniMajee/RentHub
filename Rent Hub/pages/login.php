<?php 
require '../pages/head.php';
session_start();

?>
<title>Login</title>
<link rel="stylesheet" href="../css/stylesheet.css">
<script src="../js/script.js"></script>
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
            <img class="logo_img_left" src="../images/logo.png" alt="">
            
            </div>

            <div class="col-md-6 right_div d-flex justify-content-center align-items-center">
                
                <div class="form_div w-75 mx-auto">

                <div class="logo_img text-center d-block d-md-none"><img src="../images/logo.png" class="fav"  alt=""></div>
                    <form class="form_valid" id="signup" action="../backend/loginlogic.php" method="POST" autocomplete="off">
                        <h3 class="text-center text-light">Login</h3>
                        <div class="my-4 form_input"><input type="email" class="form-control" placeholder="Email" name="email" ></div>

                        
                        <div class="my-4 form_input"><input type="password" class="form-control" placeholder="Password" name="password" id="password">
                        </div>

                        <div class="form_input pt-4 text_center">
                        <button type="submit" class="btn_submit" name="login_button">Submit</button>
                        <p class="sign_in_line mt-3">Don't have an account?  <a href="../index.php">Register Now!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
if (isset($_SESSION["login"])) {
 	    
if ($_SESSION["login"]==0) {
 ?>

<script type="text/javascript">
	alert('You entered a wrong email and password \n Please try again');
</script>

<?php 
session_destroy();
} } 
?>
