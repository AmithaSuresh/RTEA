<?php
SESSION_START();
if(!isset($_SESSION['id'])){
	//header('location:index.html');
 }
 else{
   $id=$_SESSION['id'];
  
 }

include('../../BackEnd/Php/connection.php');

$adName = $_POST['adName'];
$cat_Ad = $_POST['cat_Ad'];
$prodName = $_POST['prodName'];
$description = $_POST['description'];

$query = "INSERT INTO `market_add`(`id`,`adName`,`catProd`,`productName`,`description`) VALUES('$id','$adName','$cat_Ad','$prodName','$description')";
$result = mysqli_query($con,$query);
header('location:home.php');
$check = mysqli_query($con,"SELECT 	Add_ID FROM `market_add`");
while($row=mysqli_fetch_array($check))
{
  $adId=$row[0];
}

$_SESSION['ADD']= $adId+1;

?>
