<?php
session_start();
$CatImageRef= "../dashmin/img/category/";
$ProImageRef= "../dashmin/img/products/";
include('dbcon.php');
if(isset($_POST['register'])){
    $userName = $_POST['name'];
    $userPassword = $_POST['password'];
    $userEmail = $_POST['email'];
    $userNumber = $_POST['ContactNumber'];
    $query= $pdo->prepare("insert into user(userName,userPassword,userEmail,userContact)VALUES(:un,:up,:ue,:unum)");
    $query->bindParam("un",$userName);
    $query->bindParam("ue",$userEmail);
    $query->bindParam("up",$userPassword);
    $query->bindParam("unum",$userNumber);
    $query->execute();
echo "<script>alert('User added successfully')
location.assign('register.php')
</script>";
}

//login
if(isset($_POST['login'])){
    $useremail= $_POST['email'];
    $userPassword=$_POST['password'];
    $query=$pdo->prepare("select * from user where userEmail= :ue && userPassword= :up");
    $query->bindParam("ue",$useremail);
    $query->bindParam("up",$userPassword);
    $query->execute ();
    $userData = $query->Fetch(PDO::FETCH_ASSOC);
    if($userData) {
        $_SESSION ['sessionEmail']= $userData['userEmail'];
        $_SESSION ['sessionName']= $userData['userName'];
        $_SESSION ['sessionPassword']= $userData['userPassword'];
        $_SESSION ['sessionRole'] = $userData['userrole'];
        if($_SESSION['sessionRole'] == "user"){
            echo "<script>alert('logged in succesfully');location.assign('customer.php')</script>";
        } else {
            echo "<script>alert('logged in succesfully');location.assign('../dashmin/index.php')</script>"; 
        }
    }
}
?>