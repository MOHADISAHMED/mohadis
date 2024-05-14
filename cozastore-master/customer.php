
<?php
include("components/header.php");
if(!$_SESSION['sessionEmail']){

    echo"<script>
    alert('login first to see your account')
    location.assign('login.php')</script>";
}
?>

<?php
include("components/footer.php");
?>
