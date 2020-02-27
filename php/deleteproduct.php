<?php require_once('connect.php'); ?>
session_start();
if($_SESSION['loggedin']!=1){
    header('Location: login.php');
}
<?php
if(isset($_GET['itemId'])){
$sql = "DELETE FROM item WHERE itemId = ".$_GET['itemId'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
$path = "../images/";
$img=$_GET['itemId'];
$ext=".jpg";
$file=$path.$img.$ext;
if (!unlink($file)) {
  echo ("Error deleting $file");
} else {
  //echo ("Deleted $file");
  header("Location: viewproduct.php");
}


}
?>