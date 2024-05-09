<?php
   include("component/header.php");
?>

            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row bg-light rounded  mx-0">
                    <div class="col-md-12 ">
                    <h6 class="mb-4">All Products</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">category</th>
                                        <th scope="col">Image</th>
                                        <th scap = "col" class= "px-5" colspan="2">Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $querry = $pdo ->query("SELECT `product`.*, `categories`.`CatName`
                                    FROM `product` 
                                        LEFT JOIN `categories` ON `product`.`productCatid` = `categories`.`Catid`;");
                                    $proRow = $querry->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($proRow as $values){
                                        ?>
                                        <tr>
                                        <td><?php echo $values ['productid']?></td>
                                        <td><?php echo $values ['productName']?></td>
                                        <td><?php echo $values ['productPrice']?></td>
                                        <td><?php echo $values ['productQuantity']?></td>
                                        <td><?php echo $values ['productDescription']?></td>
                                        <td><?php echo $values ['CatName']?></td>
                                        <td><img src=<?php echo $proRef.$values['productImage']?> alt="" width="88"> </td>                                                                         
                                      <td><a href="" class="btn btn-success">Edit</a></td>
                                      <td><a href= "" class ="btn btn-danger">Delete</a></td>  
                                    </tr>
                                                                     
                                        <?php
                                     }      
                                     ?>                              
                             
                     
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

<?php
   include("component/footer.php");
?>