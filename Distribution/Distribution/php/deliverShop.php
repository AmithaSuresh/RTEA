<?php
include('../../../BackEnd/Php/connection.php');

SESSION_START();
$disID=$_SESSION['phn_No'];
//echo $disID;



$filename = basename($_SERVER['REQUEST_URI']);
$ReqestID =substr($filename,16);
echo $ReqestID;

// $query = "INSERT INTO `distributor_orders`(`Distributor_ID`, `Request_ID`) VALUES('$disID','$ReqestID')";
// $result = mysqli_query($con,$query);


$ChangeStatus = mysqli_query($con,"SELECT * FROM `distributor_orders` Where `Request_ID` = '$ReqestID'");
$result = mysqli_fetch_array($ChangeStatus);
if($result == true){
    echo 'yes';
    echo $ReqestID;
    $ChangeReq =  mysqli_query($con,"UPDATE `dis_shopreq` SET `Status`='Deliverd' where `ReqID` = '$ReqestID'");
    $ChangeReqShop =  mysqli_query($con,"UPDATE `distributor_orders` SET `Status`='Order Deliverd' where `Request_ID` = '$ReqestID'");
    header('Location: ../home.php');

}
header('Location: ../home.php');
?>