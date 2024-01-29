<?php require 'head.php';
require '../backend/postlogic.php';
?>
<title>Post</title>

    <?php
        require 'navbar.php';
    ?> 

    <div class="container text-white mt-5">
        <div class="row">
                <div class="col-md-6 mb-5">
                    <div id="carouselExample" class="carousel slide carousel_div d-flex justify-content-center">
                        <div class="carousel-inner w-75 mx-auto " >

                            <div class="carousel-item active">
                            <img src="<?php echo $row['coverpics']  ?> " class="d-block img_carousel mx-auto " alt="...">
                            </div>

                            <?php if(!empty($row['morepics1'])){ ?>
                            <div class="carousel-item">
                            <img src="<?php echo $row['morepics1']  ?>" class="d-block img_carousel mx-auto " alt="...">
                            </div>
                            
                            <?php } if(!empty($row['morepics2'])){?>
                            <div class="carousel-item">
                            <img src="<?php echo $row['morepics2']  ?>" class="d-block img_carousel mx-auto " alt="...">
                            </div>
                            <?php } if(!empty($row['morepics3'])){?>

                            <div class="carousel-item">
                            <img src="<?php echo $row['morepics3']  ?>" class="d-block img_carousel mx-auto " alt="...">
                            </div>
                            <?php } if(!empty($row['morepics4'])){?>

                            <div class="carousel-item">
                            <img src="<?php echo $row['morepics4']  ?>" class="d-block img_carousel mx-auto " alt="...">
                            </div>
                            <?php }?>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-md-6 ps-5">
                    <h1 class=""><?php echo $row['title']  ?></h1>
                    <div class="red_label mt-4">
                        <span class="badge bg-warning"><h6><?php echo $row['type']?></h6></span>
                        <span class="badge bg-warning mx-3"><h6><?php echo $row['furnishing']?></h6></span>  
                        <span class="badge bg-warning"><h6><?php echo $row['listedby']?> </h6></span>
                    </div>
                    
                    <div class="mt-3">
                        <p class="my-4"><?php echo $row['description']  ?></p>
                        <h5>Carpet Area: <?php echo $row['carpetarea']  ?> ft</h5> 
                        <h5>Price: ₹ <?php echo $row['price']  ?></h5>
                        <h5>Address: <?php echo $row['address']  ?></h5>
                    </div>
                    
                    <div class="mt-4">
                        <h6>Name: <?php echo $owner  ?></h6>
                        <h6>Contact: <?php echo $phone  ?></h6>
                        <h6>Posted on: <?php echo $row['timestamp']  ?></h6>
                    </div>
                </div>
        </div>
        
    </div>
</body>
</html>
