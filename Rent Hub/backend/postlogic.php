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
        if(isset($_GET['id'])){
        $query = "SELECT * FROM post_add where postid = '".$_GET['id']."';";
            $result = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($result);
            
            $id = $row['userid'];
            
            $query2 = "SELECT * FROM user_data where userid = '".$id."';";
            $result2 = mysqli_query($con,$query2);
            $row2 = mysqli_fetch_assoc($result2);
            $owner = $row2['name'];
            $phone = $row2['phone'];
        }
        
	}
}

else{
header('Location:login.php');
}



?>

