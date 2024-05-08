<?php
include ("component/header.php");
?>
    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
                <div class="row bg-light rounded mx-0">
                    <div class="col-md-12 ">
                       <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Product</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="Product Name" class="form-label">Product Name</label>
                                    <input type="text" name="cName" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="Product Category" class="form-label">Product Category</label>
                                    <input type="text" name="cName" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                <div class="mb-3">
                                <label for="floatingtextarea">Product Description</label>
                                <textarea class="form-control"
                                    id="emailHelp" style="height: 150px;"></textarea>
                        
                                </div>
                               <div class="mb-3">
                                    <label for="Product Quantity" class="form-label">Product Quantity</label>
                                    <input type="number" name="cName" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                    <div class="mb-3">
                                    <label for="Product price" class="form-label">Product Price</label>
                                    <input type="number" name="cName" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                </div>
                                </di>
                                <div class="mb-3">
                                    <label for="Product Img" class="form-label">Image</label>
                                    <input type="file" name="cImage" class="form-control" id="exampleInputPassword1">
                                </div>
                                <!-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                <button type="submit" name="addproduct" class="btn btn-primary">Add Product</button>
                            </form>
</div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

<?php
include ("component/footer.php");
?>