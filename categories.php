<?php 
  include("functions/userfunctions.php");
 include("includes/header.php"); 
 
?>

<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">
            <a href="index.php" class="text-white"> Home /
            </a>
            <a href="categories.php" class="text-white"> 
            Collections
            </a>
        </h6>
    </div>

</div>
 
 <div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Collections</h1>
                <div class="row"> 
                    <hr>
                <?php
                $catagories = getAllActive("categories");
                if(mysqli_num_rows($catagories)>0){
                    foreach($catagories as $item){
                        ?>
                        <div class="col-md-3 mb-2">
                            <a href="products.php?category=<?= $item['slug']; ?>"> 
                            <div class="card shadow">
                                <div class="card-body">
                                <img src="uploads/<?= $item['image']; ?>" alt="category image" class="w-100">   
                                <h4 class="text-center"><?= $item['name']; ?></h4>

                                </div>
                                </a>
                            </div>
                        </div>
                         
                         
                <?php
                    }

                }else{
                    echo "no data availble";
                }
                ?>
                </div>
            </div>
        </div>
    </div>
 </div>
<?php include("includes/footer.php"); ?>