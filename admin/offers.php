<?php
include('../middleware/adminMiddleware.php'); 
 include('includes/header.php');
 ?>
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Offers</h4>
                </div>
                <div class="card-body"id="products_table">
                    <table class="table table-borderd table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           $category= getAll('products');
                           if(mysqli_num_rows($category)>0){

                            foreach($category as $item){

                            

                           

                            ?>
                            <tr>
                                <td><?= $item['id'];?></td>
                                <td><?= $item['name'] ?></td>
                                <td>
                                <img src="../uploads/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">
                                </td>
                                <td><?= $item['status'] == '0'? "Visible":"Hidden"?></td>
                                <td><a class="btn btn-primary" href="edit-product.php?id=<?= $item['id'];?>">edit</a></td>
                                <td> 
                                    <button type="button" value="<?=  $item['id']; ?>" class="btn btn-danger delete_product_btn">Delete</button>
                                    
                                </td>
                              
                            </tr>
                            <?php
                            }
                           }
                           else{
                            echo "no records found";
                           }
                            ?>
                        </tbody>

                    </table>
                     
                </div>
            </div>
        </div>
    </div>
 </div>
  
 


<?php include('includes/footer.php'); ?>