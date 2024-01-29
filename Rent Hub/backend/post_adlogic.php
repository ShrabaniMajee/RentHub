<?php
session_start();

include("connectlogic.php");
if (isset($_POST["post_submit"])) {

        
	
    $type = strip_tags(addslashes($_POST["type"]));
	$furnishing = strip_tags(addslashes($_POST["furnishing"]));
    $listed_by = strip_tags(addslashes($_POST["listed_by"]));
	$carpet_area = strip_tags(addslashes($_POST["carpet_area"]));
	$title = strip_tags(addslashes($_POST["title"]));
	$description = strip_tags(addslashes($_POST["description"]));
    $address = strip_tags(addslashes($_POST["address"]));
	$price = strip_tags(addslashes($_POST["price"]));
    $timestamp =  date("Y/m/d");


    //coverimage
    $imgname = $_FILES['cover_picture']['name'];
    $imgtemp = $_FILES['cover_picture']['tmp_name'];
    $imgext = explode('.',$imgname);
    $imgtype = strtolower(end($imgext));

    $imgnamenew = uniqid('',true).".".$imgtype;
    $cover_picture = "../uploads/".$imgnamenew;
    move_uploaded_file($imgtemp,$cover_picture);

    //multiple imgs

    //img1 
    $imgname1 = $_FILES['more_pictures1']['name'];
    $imgtemp1 = $_FILES['more_pictures1']['tmp_name'];
    $imgext1 = explode('.',$imgname1);
    $imgtype1 = strtolower(end($imgext1));

    $imgnamenew1 = uniqid('',true).".".$imgtype1;
      
    if(!empty($_FILES['more_pictures1']['name'])){
    $more_picture1 = "../uploads/".$imgnamenew1;
    move_uploaded_file($imgtemp1,$more_picture1);
    }
    else{
        $more_picture1='';
    }

    //img2
    $imgname2 = $_FILES['more_pictures2']['name'];
    $imgtemp2 = $_FILES['more_pictures2']['tmp_name'];
    $imgext2 = explode('.',$imgname2);
    $imgtype2 = strtolower(end($imgext2));

    $imgnamenew2 = uniqid('',true).".".$imgtype2;

    if(!empty($_FILES['more_pictures2']['name'])){
    $more_picture2 = "../uploads/".$imgnamenew2;
    move_uploaded_file($imgtemp2,$more_picture2);
    }
    else{
        $more_picture2='';
    }

    //img3
     
    $imgname3 = $_FILES['more_pictures3']['name'];
    $imgtemp3 = $_FILES['more_pictures3']['tmp_name'];
    $imgext3 = explode('.',$imgname3);
    $imgtype3 = strtolower(end($imgext3));

    $imgnamenew3 = uniqid('',true).".".$imgtype3;

    if(!empty($_FILES['more_pictures3']['name'])){
    $more_picture3 = "../uploads/".$imgnamenew3;
    move_uploaded_file($imgtemp3,$more_picture3);
    }
    else{
        $more_picture3='';
    }


    //img4
    $imgname4 = $_FILES['more_pictures4']['name'];
    $imgtemp4 = $_FILES['more_pictures4']['tmp_name'];
    $imgext4 = explode('.',$imgname4);
    $imgtype4 = strtolower(end($imgext4));

 
    $imgnamenew4 = uniqid('',true).".".$imgtype4;
    
    if(!empty($_FILES['more_pictures4']['name'])){
    $more_picture4 = "../uploads/".$imgnamenew4;
    move_uploaded_file($imgtemp4,$more_picture4);
    }
    else{
        $more_picture4='';
    }


	// $name = $_SESSION['name'];
    $user_id = $_SESSION['user_id'];
    // $phone = $_SESSION['phone'];

    $check = "INSERT INTO post_add (userid, type,furnishing, listedby, carpetarea,title,description,address,price,coverpics,morepics1,morepics2,morepics3,morepics4,timestamp) VALUES ('$user_id','$type','$furnishing','$listed_by','$carpet_area','$title','$description','$address','$price','$cover_picture','$more_picture1','$more_picture2','$more_picture3','$more_picture4','$timestamp')";

	mysqli_query($con,$check);

}



if ($con->affected_rows>0) {
	
	header('Location:../pages/post_ad.php?post_submit=1');

 }

else {
	$_SESSION['post_submit']=1;
	header('Location:../pages/post_ad.php?post_submit=0');

}

?>