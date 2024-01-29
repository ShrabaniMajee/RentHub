<?php require 'head.php';
require '../backend/homelogic.php';

 if(isset($_GET['del'])){

    ?>
    <script>
    alert('Ad deleted successfully');  
    window.location.href ='my_ads.php';
    </script>
   <?php }
?>
<title>My Ads</title>

    <?php
        require 'navbar.php';
    ?> 

    
    <div class="container mt-5">
        <div class="row ">            
           
            <?php
            $userid=$_SESSION['user_id'];
            $i=0;
            while($row = mysqli_fetch_assoc($result)){
                if($userid==$row['userid']){
                    
                    $i=$i+1;
            ?>
                
                <div class="col-lg-3">
                    <a class="text-black text-decoration-none" <?php echo "href='post.php?id={$row['postid']}'" ?>>
                <div class="card mb-4 p-2 background_card_body " style=" min-height:20rem;">
                    <img src="<?php echo $row['coverpics']  ?> " class="card-img-top border border-dark" alt="..." style="height:15rem;">
                    <div class="card-body">
                        <h3 class="card-title "> ₹ <?php echo $row['price'] ;?> </h3>

                        <h5 class="mt-2">  <?php echo $row['title']; ?>  </h5>
                        <p class="ms-auto mt-2 mb-0">Posted on: <?php echo $row['timestamp'] ;?> </p>
                        <a  <?php echo "href='../backend/deletelogic.php?id={$row['postid']}'" ?>  class=" mt-2 btn_cool"><span>Delete</span></a>                      

                    </div>
                    </a>
                </div>
            
                </div>

                <?php 
                }
            }
                
            if($i==0){
                ?>
            <div class="d-flex justify-content-center align-items-center text-white h_ads">
                     <h3 class="text-center "> <?php echo "No Ads Yet";?> </h3>
            </div>

            <?php
            }
            ?>
                         
        </div>
        
    </div>
</body>
</html>
 