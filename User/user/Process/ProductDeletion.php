<?php
 include('../../../BackEnd/php/connection.php');

 $filename = basename($_SERVER['REQUEST_URI']);

 $filename =substr($filename,20);
 echo $filename;

$query ="DELETE FROM `user_cart` WHERE `ProductID`='$filename'";
$result = mysqli_query($con,$query);
header('location:../StartShopping.php');

 
$prodname=$_POST['prodname'];
$quantity=$_POST['quantity'];

$check=mysqli_query($con,"SELECT * from `shop_products` where `Name`='$prodname'");
                                   while($row1=mysqli_fetch_array($check))
                                   {
                                     $prodid=$row1[0];
                                     $price=$row1[2];
                                    }
   
 if(isset($_POST['submit1']))
 {
     $query1="INSERT into `user_cart` (`ProductID`, `Numberofprod`,`price`,`onlineID`) values ('$prodid','$quantity','$price','$onlineid')";
     $result=mysqli_query($con,$query1);   
      
 }     

?>