<?php 
$page_title="offer page";
  include("functions/userfunctions.php");
 include("includes/header.php"); 
 if(isset($_GET['product'])){ 

  $product_slug =$_GET['product'];
  $product_data = getSlugActive("products",$product_slug);
  $product = mysqli_fetch_array($product_data);
if($product){
?>
<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">
            <a class="text-white" href="index.php"> Home / 
            </a>
            <a class="text-white" href="categories.php"> 
            Collections /</a> <?= $product['name'];?></h6>
    </div>
</div>   
<div class="bg-light py-4">
<div class="container mt-3 product_data">
    <div class="row">
        <div class="col-md-4">
            <div class="shadow"> 
                <img src="uploads/<?= $product['image']; ?>" alt="Product image" class="w-100">
            </div>
        </div>
        <div class="col-md-8">
            <h4 class="fw-bold"><?= $product['name']; ?> 
            <span class="float-end text-danger"><?php if($product['trending']){ echo"Trending"; } ?></span>
            </h4>
            <hr>
            <p><?= $product['small_description']; ?></p>
            <hr>
             
                 
             
             
            <h6>Learning Outcomes</h6><br>
            <p><?= $product['description']; ?></p><br>
            <h6>Introduction</h6><hr>
            <br>
            <p><?= $product['meta_description']; ?></p>
            <hr>
            <br>
            <p><?= $product['meta_keywords']; ?></p>
            <hr>
            
            <a href="<?= $product['meta_title']; ?>" class="btn btn-primary">Learn More</a>

            </div>
             
            <hr>

            
    </div>
    
</div>
</div>
<?php
}
else{
    echo "something went wrong";
 }
 }
 else{
    echo "something went wrong";
 }
 include("includes/footer.php"); ?>   