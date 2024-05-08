<?php
include("dbconn.php");
$catref="img/category/";
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

//delete//

if(isset($_GET['deleteKey'])){
    $Catid= $_GET['deleteKey'];
    $querry= $pdo->prepare("DELETE from categories where Catid = :pid");
    $querry->bindParam(":pid", $Catid);
    $querry->execute();
    echo   "<script>alert('category delete'); location.assign('viewcategory.php') </script>";
}
?>
