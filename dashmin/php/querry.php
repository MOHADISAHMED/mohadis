<?php
session_start();
include("dbconn.php");
$catref="img/category/";
$proRef = "img/products/";
if (isset($_POST["addcategory"])){
    $catName=$_POST["cName"];
    $catImageName=$_FILES['cImage']['name'];
    $catTempName =$_FILES['cImage']['tmp_name'];
    $extension = pathinfo($catImageName,PATHINFO_EXTENSION);
    $desig="img/category/".$catImageName;
    if($extension=="jpg" || $extension=="jpeg" || $extension=="png" || $extension=="webp")
    {
        if(move_uploaded_file($catTempName,$desig)){
        $querry = $pdo->prepare("INSERT INTO `categories`(CatName , Catimage) VALUES (:pName,:pImage)");
        $querry-> bindParam(":pName",$catName);
        $querry-> bindParam(":pImage",$catImageName);
        $querry->execute();
        echo "<script>alert('category added')</script>"; 
    } else {
        echo "<script>alert('Failed to upload image')</script>";        
    }
    }
    else {
        echo "<script>alert('invalid file type')</script>";
    }
}   
   //updatecategory//
   if (isset($_POST["EditCategory"])){
    $CatName=$_POST["cName"];
    $Catid=$_POST["catid"];
    if(!empty($_FILES['cImage']['name'])){
    $catImageName=$_FILES['cImage']['name'];
    $catTempName =$_FILES['cImage']['tmp_name'];
    $extension = pathinfo($catImageName,PATHINFO_EXTENSION);
    $desig="img/category/".$catImageName;

    if($extension=="jpg" || $extension=="jpeg" || $extension=="png" || $extension=="webp"){
        if(move_uploaded_file($catTempName,$desig)){
        $querry = $pdo->prepare("update categories set CatName =:pName Catimage=:pImage where Catid=:pid");
        $querry-> bindParam(":pid",$Catid);
        $querry-> bindParam(":pName",$CatName);
        $querry-> bindParam(":pImage",$catImageName);
        $querry->execute();
        echo "<script>alert('category Updated')</script>"; 
    } else {
        echo "<script>alert('Failed to upload image')</script>";        
    }
    }
    else {
        echo "<script>alert('invalid file type')</script>";
    }
    
}else{
    $querry = $pdo->prepare("update categories set CatName =:pName  where Catid=:pid");
    $querry-> bindParam(":pid",$Catid);
    $querry-> bindParam(":pName",$CatName);
    $querry->execute();
echo "<script>alert('category Updated without image'); location.assign('viewcategory.php')</script>"; 
}
} 

//delete categories//

if(isset($_GET['deleteKey'])){
    $Catid= $_GET['deleteKey'];
    $querry= $pdo->prepare("DELETE from categories where Catid = :cid");
    $querry->bindParam(":cid", $Catid);
    $querry->execute();
    echo   "<script>alert('category delete'); location.assign('viewcategory.php') </script>";
}

//product added//

if (isset($_POST['addProduct'])){
    $productName=$_POST['pName'];
    $productPrice=$_POST['pPrice'];
    $productQuantity =$_POST['pQuantity'];
    $productDescription=$_POST['pDescription'];
    $productCatid=$_POST['pCatid'];
    $productImageName =$_FILES['pImage']["name"];
    $productTempName =$_FILES['pImage']["tmp_name"];
    $extension = pathinfo($productImageName,PATHINFO_EXTENSION);
    $desig="img/products/".$productImageName;
    if($extension=="jpg" || $extension=="jpeg" || $extension=="png" || $extension=="webp")
    {
        if(move_uploaded_file($productTempName,$desig)){
        $querry = $pdo->prepare("INSERT INTO `product`(`productName`, `productQuantity`, `productPrice`, `productDescription`,`productImage`, `productCatid`) VALUES (:pn,:pq,:pp,:pd,:pi,:pc)");
        $querry-> bindParam(":pn",$productName);
        $querry-> bindParam(":pq",$productQuantity);
        $querry-> bindParam(":pp",$productPrice);
        $querry-> bindParam(":pd",$productDescription);
        $querry-> bindParam(":pi",$productImageName);
        $querry-> bindParam(":pc",$productCatid);
        $querry->execute();
        echo "<script>alert('product added')</script>"; 
    } else {
        echo "<script>alert('Failed to upload prodcut')</script>";        
    }
    }
    else {
        echo "<script>alert('invalid file type')</script>";
    }
}
//productdelete//

if(isset($_GET['pdeleteKey'])){
    $productid= $_GET['pdeleteKey'];
    $querry= $pdo->prepare("DELETE from product where productid = :pid");
    $querry->bindParam(":pid", $productid);
    $querry->execute();
    echo   "<script>alert('product delete'); location.assign('viewproducts.php') </script>";
}

   //updateproduct//
   if (isset($_POST["Editproduct"])){
    $productName=$_POST["pName"];
    $productid=$_POST["pid"];
    if(!empty($_FILES['pImage']['name'])){
    $productImageName=$_FILES['cImage']['name'];
    $productTempName =$_FILES['pImage']['tmp_name'];
    $extension = pathinfo($productImageName,PATHINFO_EXTENSION);
    $desig="img/products/".$prodcutImageName;

    if($extension=="jpg" || $extension=="jpeg" || $extension=="png" || $extension=="webp"){
        if(move_uploaded_file($productTempName,$desig)){
        $querry = $pdo->prepare("update product set productName =:pName productImage=:pImage where productid=:pid");
        $querry-> bindParam(":pid",$productid);
        $querry-> bindParam(":pName",$productName);
        $querry-> bindParam(":pImage",$productImageName);
        $querry->execute();
        echo "<script>alert('product Updated')</script>"; 
    } else {
        echo "<script>alert('Failed to upload image')</script>";        
    }
    }
    else {
        echo "<script>alert('invalid file type')</script>";
    }
    
}else{
    $querry = $pdo->prepare("update product set productName =:pName  where productid=:pid");
    $querry-> bindParam(":pid",$productid);
    $querry-> bindParam(":pName",$productName);
    $querry->execute();
echo "<script>alert('product Updated without image'); location.assign('viewproducts.php')</script>"; 
}
} 

?>
