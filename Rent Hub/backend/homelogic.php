<?php


// $price 
// $type
// $furnishing
// $listedby
// $title
// $timestamp



session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login']==1){
        require 'connectlogic.php';

        $query = "SELECT * FROM post_add;";

        $result = mysqli_query($con,$query);
        // $rows = mysqli_fetch_assoc($result);
     
	}
}

else{
header('Location:login.php');
}




?>




