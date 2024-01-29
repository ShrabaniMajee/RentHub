<?php

include("connectlogic.php");
if (isset($_POST["login_button"])) {

	$email = strip_tags(addslashes($_POST["email"]));
	$password = md5(strip_tags(addslashes($_POST["password"])));
	
	$check = "SELECT * FROM user_data WHERE (email,password) = ('$email','$password');";

	mysqli_query($con,$check);
}


if ($con->affected_rows>0) {
	session_start();
	
    $query1 = "SELECT * FROM user_data where email = '".$email."';";
	$result1 = mysqli_query($con,$query1);

    $row1 = mysqli_fetch_assoc($result1);

	$_SESSION['name'] = $row1['name'];
	$_SESSION['user_id'] = $row1['userid'];
    $_SESSION['phone'] = $row1['phone'];
    // print_r($_SESSION);
    // die();
    $query2 = "SELECT * FROM post_add;";
	$result2 = mysqli_query($con,$query1);

    $row2 = mysqli_fetch_assoc($result2);


    $_SESSION['type'] = $row2['name'];
	$_SESSION['furnishing'] = $row2['userid'];
    $_SESSION['listedby'] = $row2['phone'];
	$_SESSION['carpetarea'] = $row2['carpetarea'];
	$_SESSION['title'] = $row2['title'];
    $_SESSION['description'] = $row2['description'];
    $_SESSION['address'] = $row2['address'];
	$_SESSION['price'] = $row2['price'];
    $_SESSION['coverpics'] = $row2['coverpics'];
    $_SESSION['morepics'] = $row2['morepics'];
	$_SESSION['timestamp'] = $row2['timestamp'];


	$_SESSION['login']=1;
	header('Location:../pages/home.php');
 }

else {
	session_start();
	$_SESSION['login']=0;
	header('Location:../pages/login.php');

}

?>