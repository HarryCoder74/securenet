<?php
include('../middleware/adminMiddleware.php'); 
 include('includes/header.php');
 ?>
 <div class="container">
    <div class="row">
        <?php
        if(isset($_GET['id'])){ 
        $product_id = $_GET['id'];
        $product = getById("products",$product_id);
        if(mysqli_num_rows($product)>0){
            $data = mysqli_fetch_array($product);
        
        ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Offers
                    <a href="offers.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                       <div class="row">
                        <div class="col-md-12">                               
                            <label class="mb-0" >Select category</label>
                            <select name="category_id" class="form-select mb-2" >
                            <option selected>Select Category</option>
                                <?php
                                $catagories = getAll('categories');
                                if(mysqli_num_rows($catagories)> 0){ 
                                foreach($catagories as $item){
                                    
                                    ?>
                                    <option value="<?= $item['id']; ?>"<?= $data['category_id'] == $item['id']? 'selected':''?>><?= $item['name']; ?></option>
                                <?php

                                }
                            }else{
                                echo "no categories found";
                            }
                                ?>
                            
                             
                            </select>
                        </div> 
                        <label for=""><?= $data['id']; ?></label>
                        <input type="hidden" name="product_id" value="<?= $data['id']; ?>" >  
                        <div class="col-md-6">                               
                            <label class="">Name</label>
                            <input type="text" value="<?= $data['name']; ?>" name="name" placeholder="Enter Catergory Name" class="form-control mb-2" required>
                        </div>
                        <div class="col-md-6">                               
                            <label class="">Slug</label>
                            <input type="text" value="<?= $data['slug']; ?>" name="slug" placeholder="Enter slug" class="form-control mb-2 " required>
                        </div>
                        <div class="col-md-12">
                            <label class="">Small Description</label>
                            <textarea rows="3" name="small_description"  placeholder="Enter small description" class="form-control mb-2 "required><?= $data['small_description']; ?></textarea>
                         </div>
                         <div class="col-md-12">
                            <label class="">Description</label>
                            <textarea rows="3" name="description"  placeholder="Enter description" class="form-control mb-2 "required><?= $data['description']; ?></textarea>
                         </div>
                         
                          
                        <div class="col-md-12">                               
                            <label class="">Upload Image</label>
                            <input type="file" name="image" class="form-control mb-2">
                            <label class="">Current Image</label>
                            <input type="hidden" name="old_image" value="<?= $data['image'];?>" >
                            <img src="../uploads/<?= $data['image'];?>" width="50px" height="50px" alt="">
                        </div>
                        <div class="col-md-6">                               
                            <label class="">Original price</label>
                            <input type="text" value="<?= $data['original_price']; ?>" name="original_price" placeholder="Enter Original price" class="form-control mb-2 " required>
                        </div>

                        <div class="col-md-6">                               
                            <label class="">Selling price</label>
                            <input type="text" value="<?= $data['selling_price']; ?>" name="selling_price" placeholder="Enter Selling price" class="form-control mb-2" required>
                        </div>
                         
                         
                        <div class="col-md-3">                               
                            <label class="">Status</label><br>
                            <input type="checkbox" <?= $data['status']? 'checked':'' ?> name="status" >
                        </div>
                        <div class="col-md-3">                               
                            <label class="">Trending</label><br>
                            <input type="checkbox" <?= $data['trending']? 'checked':'' ?> name="trending">

                        </div>
                        </div>
                         
                        <div class="col-md-12">                               
                            <label class="">Meta Title</label>
                            <input type="" value="<?= $data['meta_title']; ?>" name="meta_title" placeholder="Enter meta tittle" class="form-control mb-2"required>
                        </div>
                        <div class="col-md-12">
                            <label class="">Meta Description</label>
                            <textarea rows="3" name="meta_description"  placeholder="Enter meta description" class="form-control mb-2 mb-2 required"><?= $data['meta_description']; ?></textarea>
                         </div>
                         <div class="col-md-12">
                            <label class="">Meta Keywords</label>
                            <textarea rows="3" name="meta_keywords"  placeholder="Enter Meta keywords" class="form-control mb-2 mb-2"required><?= $data['meta_keywords']; ?></textarea>
                         </div>
                         
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="update_product_btn">Update</button>
                        </div>
                        </div>
                    </div>                                      
                    </div>    
                </div>
            </div>
        </div>
        <?php
        }
        else{
            echo "Product not found or given id";
        }
    }else{
        echo "id missing from url";
    }
    ?>
    </div>
</div>
