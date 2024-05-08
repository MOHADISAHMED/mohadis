<?php
   include("component/header.php");
?>


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row bg-light rounded  mx-0">
                    <div class="col-md-12 ">
                    <h6 class="mb-4">All categories</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">iD</th>
                                        <th scope="col">catName</th>
                                        <th scope="col">catimage</th>
                                        <th scap = "col" class= "px-5" colspan="2">Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $querry=$pdo -> query("select * from categories");
                                    $row = $querry->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($row as $values){
                                        ?>
                                        <tr>
                                        <th scope="row"><?php echo $values ['Catid']?></th>

                                        <td><?php echo $values ['CatName']?></td>

                                      <td><img src = "<?php echo $catref.$values['Catimage']?>" alt="" width="80"></td>
                                      <td><a href="updatecategory.php?cid=<?php echo $values['Catid']?>"class="btn btn-success">Edit</a></td>
                                      <td><a href= "?deleteKey=<?php echo $values['Catid']?>" class ="btn btn-danger">Delete</a></td>  
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