<?php
include('../../../BackEnd/php/connection.php');
session_start();
$PhoneNumber=$_SESSION['PhoneNumber'];
$query=mysqli_query($con,"SELECT * FROM `shop_info` where `PhoneNumber`='$PhoneNumber'");
while($row = mysqli_fetch_array($query))
{
    $shopid=$row[0];
    //echo $shopid;
}


include('ShopLinkInsertion.php');
LinkInsertion();




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel = "shortcut icon" href = "../../../Logos/title.png" 
        type = "image/x-icon">
  <title>RTEA shop/Distribution</title>

  <!-- Title icon -->
  <link rel = "icon" href = "../../../Logos/title.png" 
        type = "image/x-icon"> 
    <!-- Google Font -->
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="../images/favicon.png" /> -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="home.php"><img src="../../../Logos/Untitled-1.jpg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="home.php"><img src="../../../Logos/Untitled-1.jpg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="mdi mdi-image-filter"></i>User</a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link"><i class="mdi mdi-email-outline"></i>Distribution</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="mdi mdi-calendar"></i>My Shop</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-ring"></i>
              <span class="count">D</span>
            </a>
            
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-variant"></i>
              <span class="count">S</span>
            </a>
            
                
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href="#">
              <img class="img-xs rounded-circle" src="../../../Logos/title.png" alt="">
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="../../../Logos/title.png" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
              
             
                <?php
                include('../../../BackEnd/php/connection.php');
                $check = mysqli_query($con, "SELECT * FROM `shop_info` where `PhoneNumber`= '$PhoneNumber'");
                while($row = mysqli_fetch_array($check))
                {
                   echo ' <p class="name">'.$row[2].'</p>';
                  echo '<p class="designation">'.$row[4].'</p>';
                    
                }
               

              
                ?>
                <!-- <p class="name">Richard V.Welsh</p> -->
                <!-- <p class="designation">Manager</p> -->
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>   </li>
          <li class="nav-item"><a class="nav-link" href="request.php"><img class="menu-icon" src="../images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Request</span></a></li>
          <li class="nav-item"><a class="nav-link" href="track.php"><img class="menu-icon" src="../images/menu_icons/02.png" alt="menu icon"><span class="menu-title">Track</span></a></li>
          <li class="nav-item"><a class="nav-link" href="userinfo.php"><img class="menu-icon" src="../images/menu_icons/03.png" alt="menu icon"><span class="menu-title">User Information</span></a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="../../../pages/forms/basic_elements.html"><img class="menu-icon" src="../../images/menu_icons/04.png" alt="menu icon"><span class="menu-title">Form</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../../pages/charts/chartjs.html"><img class="menu-icon" src="../../images/menu_icons/05.png" alt="menu icon"><span class="menu-title">Charts</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../../pages/tables/basic-table.html"><img class="menu-icon" src="../../images/menu_icons/06.png" alt="menu icon"><span class="menu-title">Table</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../../pages/icons/font-awesome.html"><img class="menu-icon" src="../../images/menu_icons/07.png" alt="menu icon"> <span class="menu-title">Icons</span></a></li>
          <li class="nav-item"> -->
            
          </li>
            <li class="nav-item purchase-button"><a class="nav-link" href="" target="_blank">BACK</a></li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
             

              <div class="card">
                <div class="card-body">
                 
                  <h4 class="card-title">Distribution Request</h4>
                  <p class="card-description">
                    <code></code>
                  </p>
                  <form action="trackStatus.php" method='POST'>
                 
                  <table class="table table-striped">
                      
                    <thead>
                      <tr>
                      <th>
                         Id 
                        </th>
                        <th>
                         Product Name
                        </th>
                        <th>
                          Quantity
                        </th>
                        <th>
                          Status
                        </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
$date = date('Y-m-1');      
// $check=mysqli_query($con,"SELECT * FROM `shop_link` where `Shop_ID`='$shopid' and `NumberOf`<7");
// while($row = mysqli_fetch_array($check))
// {
//     $prodid=$row[1];

//     $res=mysqli_query($con,"SELECT * FROM `shop_products` where `Product_ID`='$prodid' ");
//  while($row = mysqli_fetch_array($res))
//  {
//      $prodname=$row[1];
     
     $res1=mysqli_query($con,"SELECT * FROM `dis_shopreq` where `ShopID`='$shopid' and `Date`>'$date' order by `Date` desc ");
     while($row1 = mysqli_fetch_array($res1))
     {
         $ReqID=$row1[0];
       
         $quantity=$row1[3];
         $prodname=$row1[2];
         $status=$row1[6]; 
         echo '<tr> 
         <td>'.$ReqID.'</td>
         <td>'.$prodname.'</td><td>'.$quantity.'</td><td><a  class="btn btn-outline-primary" href="trackStatus.php?'.$ReqID.'">Track</a></td></tr>';
         
}
       
   

?>
                      
                    
                      </tbody></table></form>         
                
                      

                  
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <!-- <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div> -->
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->



</body>
</html>
