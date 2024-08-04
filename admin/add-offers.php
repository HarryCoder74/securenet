<?php
include('../middleware/adminMiddleware.php'); 
 include('includes/header.php');
 ?>
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Offers</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                       <div class="row">
                        <div class="col-md-12">                               
                            <label class="mb-0">Select category</label>
                            <select name="category_id" class="form-select mb-2" >
                            <option selected>Select Category</option>
                                <?php
                                $catagories = getAll('categories');
                                if(mysqli_num_rows($catagories)> 0){ 
                                foreach($catagories as $item){
                                    ?>
                                    <option   value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
                                <?php

                                }
                            }else{
                                echo "no categories found";
                            }
                                ?>
                            
                             
                            </select>
                        </div>   
                        <div class="col-md-6">                               
                            <label class="">Name</label>
                            <input type="text" name="name" placeholder="Enter Catergory Name" class="form-control mb-2" required>
                        </div>
                        <div class="col-md-6">                               
                            <label class="">Slug</label>
                            <input type="text" name="slug" placeholder="Enter slug" class="form-control mb-2 " required>
                        </div>
                        <div class="col-md-12">
                            <label class="">Small Description</label>
                            <textarea rows="3" name="small_description"  placeholder="Enter small description" class="form-control mb-2 "required></textarea>
                         </div>
                         <div class="col-md-12">
                            <label class="">Description</label>
                            <textarea rows="3" name="description"  placeholder="Enter description" class="form-control mb-2 "required></textarea>
                         </div>
                          
                        <div class="col-md-12">                               
                            <label class="">Upload Image</label>
                            <input type="file" name="image" class="form-control mb-2"required>
                        </div>
                        <div class="col-md-6">                               
                            <label class="">Original price</label>
                            <input type="text" name="original_price" placeholder="Enter Original price" class="form-control mb-2 " required>
                        </div>

                        <div class="col-md-6">                               
                            <label class="">Selling price</label>
                            <input type="text" name="selling_price" placeholder="Enter Selling price" class="form-control mb-2" required>
                        </div>
                        
                        
                        
                        
                        <div class="col-md-3">                               
                            <label class="">Status</label><br>
                            <input type="checkbox" name="status" >
                        </div>
                        <div class="col-md-3">                               
                            <label class="">Trending</label><br>
                            <input type="checkbox" name="trending">

                        </div>
                        </div>
                         
                        <div class="col-md-12">                               
                            <label class="">Link</label>
                            <input type="" name="meta_title" placeholder="Enter a link " class="form-control mb-2"required>
                        </div>
                        <div class="col-md-12">
                            <label class="">Meta Description</label>
                            <textarea rows="3" name="meta_description"  placeholder="Enter meta description" class="form-control mb-2 mb-2 required"></textarea>
                         </div>
                         <div class="col-md-12">
                            <label class="">Body</label>
                            <textarea rows="3" name="meta_keywords"  placeholder="Enter the bady" class="form-control mb-2 mb-2"required></textarea>
                         </div>
                         
                        <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="add_product_btn">Save</button>
                        </div>
                        </div>
                    </div>                                      
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('includes/footer.php'); ?>