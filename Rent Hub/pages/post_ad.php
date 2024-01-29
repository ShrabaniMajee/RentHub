 <?php 
 require 'head.php';
 session_start();
 
?>
<title>Post a property</title>
<script src="../js/script.js"></script>

    <?php
        require 'navbar.php';
    ?> 

    <div class="container text-white">
        <h1 class="text-center mt-5">Post your AD</h1>
        <div class="post_form_div  mb-4 p-3 w-75 mx-auto mt-3">
            <h1 class="text-center ">Details</h1>
            <form class="form_valid" action="../backend/post_adlogic.php" method="POST" enctype="multipart/form-data">
                        <div class="type_space">
                            <h5>*Type:</h5>
                            <input type="radio" class="btn-check" name="type" id="appartment" value="Appartment" checked >
                            <label class="btn btn-outline-warning  my-1 mx-1" for="appartment">Appartment</label>

                            <input type="radio" class="btn-check" name="type" id="room" value="Room" >
                            <label class="btn btn-outline-warning  my-1 mx-1" for="room">Room</label>
                            
                            <input type="radio" class="btn-check" name="type" id="pg"  value="P.G.">
                            <label class="btn btn-outline-warning  my-1 mx-1" for="pg">P.G.</label>
                        </div>

                        <div class="furnishing mt-4">
                            <h5>*Furnishing:</h5>
                            <input type="radio" class="btn-check" name="furnishing" id="fully" value="Fully Furnished"  checked>
                            <label class="btn btn-outline-warning  my-1 mx-1" for="fully">Fully Furnished</label>

                            <input type="radio" class="btn-check" name="furnishing" id="semi" value="Semi-Furnished">
                            <label class="btn btn-outline-warning  my-1 mx-1" for="semi">Semi-Furnished</label>
                            
                            <input type="radio" class="btn-check" name="furnishing" id="un" value="Unfurnished">
                            <label class="btn btn-outline-warning  my-1 mx-1" for="un">Unfurnished</label>
                        </div>

                        <div class="listed_by mt-4">
                            <h5>*Listed By:</h5>
                            <input type="radio" class="btn-check" name="listed_by" id="success-outlined" value="Owner" checked >
                            <label class="btn btn-outline-warning  my-1 mx-1" for="success-outlined">Owner</label>

                            <input type="radio" class="btn-check" name="listed_by" id="danger-outlined" value="Dealer" >
                            <label class="btn btn-outline-warning  my-1 mx-1" for="danger-outlined">Dealer</label>                        
                        </div>

                        <div class="carpet_area mt-4  col-md-6">
                            <h5>*Carpet Area:</h5>
                            <input class="form-control bg-transparent input_border text-white" type="text" id="carpet_area" placeholder="Carpet Area in ft" name="carpet_area" >
                        </div>

                        <div class="title mt-4 col-md-6">
                            <h5>*Add Title:</h5>
                            <input class="form-control bg-transparent text-white input_border" type="text" id="title" placeholder="Add Title" name="title" >
                        </div>

                        <div class="description mt-4 col-md-6">
                            <h5>*Add Description:</h5>
                            <textarea class="form-control bg-transparent text-white input_border" cols="30" rows="10" placeholder="Add Description" id="description" name="description"></textarea>
                        </div>

                        <div class="address mt-4 col-md-6">
                            <h5>*Full Address:</h5>
                            <input class="form-control bg-transparent text-white input_border" type="text" id="address" name="address" placeholder="Full Address">
                        </div>

                        <div class="price mt-4 col-md-6">
                            <h5>*Price:</h5>
                            <input class="form-control bg-transparent text-white input_border" type="text" id="price" placeholder="Price" name="price" >
                        </div>

                        <div class="cover_pic mt-4 col-md-6">
                            <h5>*Cover Pictures:</h5>
                            <input class="form-control bg-transparent  text-white" type="file"  id="cover_picture"  name="cover_picture" >
                        </div>
                        
                        <div class="more_pic mt-4 col-md-6">
                            <h5>More Pictures (max 4):</h5>
                            <input class="form-control bg-transparent text-white" type="file"  name="more_pictures1" >
                            <input class="form-control my-2 bg-transparent text-white" type="file"  name="more_pictures2" >
                            <input class="form-control my-2 bg-transparent text-white" type="file"  name="more_pictures3" >
                            <input class="form-control bg-transparent text-white" type="file"  name="more_pictures4" >
                        </div>

                        <div class="submit_input mt-4 col-md-4">
                            <input class="logout_btn text-white " type="submit" value="Post" name="post_submit">
                        </div>


                    </form>
        </div>
        
    </div>
</body>
</html>

<?php

if(isset($_GET['post_submit'])){
    if($_GET['post_submit']==1){
        ?>

        <script type="text/javascript">
	       alert('Post uploaded');
           window.location.href ='post_ad.php';

        </script>
        
        <?php
        
    }

    else{
        ?>

        <script type="text/javascript">
	        alert('Error occured');
	        window.location.href ='post_ad.php';
        </script>

        <?php
        unset($_GET['post_submit']);
        
    }
 }
 
?>