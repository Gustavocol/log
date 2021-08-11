<?php
session_start();
if(isset($_SESSION["usuario"])){

?>
<?php include("menu.php");?>

<?php
}else{
    header("location:login.php");
}
?>