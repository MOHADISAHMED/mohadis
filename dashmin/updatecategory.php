<?php
   include("component/header.php");
   if(isset($_GET['cid']) ){
    $catstringid = $_GET['cid'];
    $querry= $pdo ->prepare("SELECT* from categories where Catid=:pid");
    $querry ->bindParam("pid",$catstringid);
    $querry->execute();
    $catData = $querry->fetch(PDO::FETCH_ASSOC);
   }
?>
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4"> 
                <div class="row vh-100 bg-light rounded  mx-0">
                    <div class="col-md-12">
                        <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Update Categoyry</h6>
                            <form  method="post" enctype = "multipart/form-data">
                                <input  type= "hidden" name ="catid" value="<?php echo $catData['Catid'] ?>" > 
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name </label>
                                    <input type="text" class="form-control" name="cName"  id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo $catData['CatName']?>">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Image</label>
                                    <input type="file" name="cImage"  class="form-control" id="exampleInputPassword1"> <img src="<?php echo $catref.$catData['Catimage']?>" width="80" alt="">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" name="EditCategory" class="btn btn-primary">Update Category</button>
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>               
                                
<?php
   include("component/footer.php");
?>