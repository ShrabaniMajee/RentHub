<?php 
require 'connectlogic.php';
$id = $_GET['id'];

$query = "DELETE FROM post_add where postid = '".$id ."';";
$result = mysqli_query($con,$query);

if($con -> affected_rows>0){
    header('Location:../pages/my_ads.php?del=1');
}

?>