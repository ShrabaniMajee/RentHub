<?php require 'head.php';
require '../backend/homelogic.php';
?>
<title>Home</title>

    <?php
        require 'navbar.php';
    ?> 

    <div class="container mt-5">
        <div class="row row-cols-lg-4">

            <?php  
            while($row = mysqli_fetch_assoc($result)){?>
                
               
                <div class="col-lg-3">
                    <a class="text-black text-decoration-none" <?php echo "href='post.php?id={$row['postid']}'" ?>>
                <div class="card mb-4 p-2 background_card_body " style=" min-height:20rem;">
                    <img src="<?php echo $row['coverpics']  ?> " class="bg-black card-img-top border border-dark bg-black" alt="..." style="height:15rem;">
                    <div class="card-body">
                        <h3 class="card-title "> ₹ <?php echo $row['price'] ;?> </h3>

                        <h5 class="mt-2">  <?php echo $row['title']; ?>  </h5>
                        
                        <p class="ms-auto mb-0 mt-2">Posted on: <?php echo $row['timestamp'] ;?> </p>
                        
                    </div>
                    </a>
                </div>
            
                </div>

                <?php 
            }
        
            ?>
                         
        </div>
        
    </div>
</body>
</html>
