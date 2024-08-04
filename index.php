 <?php 
  
 include("functions/userfunctions.php");
 $page_title="Home page";
 include("includes/header.php");
 include("includes/slider.php");
?>
 <div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Our Trending offers</h2>
                <hr>
                <div class="row"> 
                <?php 
                $trending = getAllTrending();
                if(mysqli_num_rows($trending)> 0){
                    foreach($trending as $item){

                    ?>
                     <div class="col-md-3 mb-2">
                            <a href="product-view.php?product=<?= $item['slug']; ?>"> 
                            <div class="card shadow">
                                <div class="card-body">
                                <img src="uploads/<?= $item['image']; ?>" alt="Product image" class="w-100">   
                                <h4 class="text-center"><?= $item['name']; ?></h4>

                                </div>
                                
                                </a>
                            </div>
                            </div>

                    <?php
                    }
                }
                else{
                    echo "No trending Offers";
                }
                ?>
                 

            </div>
        </div>
    </div>
 </div>
 <div id="about" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">About Us</h2>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-6 mb-3">
                    <h2 class="">Who We Are</h2>
                    <p> 
                    Securenet is a pioneering initiative dedicated to enhancing digital literacy and promoting safe internet practices. Our platform is designed to provide users with the knowledge and tools they need to navigate the digital world confidently and securely. Our team consists of experienced educators, technology professionals, and cybersecurity experts committed to making a positive impact on digital education.</p>


                    </div>
                    <div class="col-md-6 mb-3">
                    <h2 class="">Our mission</h2>
                    <p>Our mission at Securenet is to empower individuals of all ages with the skills and knowledge needed to effectively use digital technologies while ensuring their safety online. We strive to bridge the gap between technological advancements and digital literacy, making it accessible and understandable for everyone.</p>
                    </div>
                </div>
                </div>
        </div>
    </div>
 </div>
 
        
<?php include("includes/footer.php"); ?>
     