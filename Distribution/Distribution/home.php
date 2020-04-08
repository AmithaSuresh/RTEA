<?php
SESSION_START();
$disID=$_SESSION['phn_No'];
echo $disID;
include('../../BackEnd/Php/connection.php');
$DisInfo =   mysqli_query($con,"SELECT * FROM `distribution_info` Where `Distribution_ID`='$disID'");
while($row = mysqli_fetch_array($DisInfo))
{
 $DisLocation =$row[1];
}

?>
<!DOCTYPE html>
<html lang="en">
<!-- Title icon -->
<link rel = "icon" href = "../../Logos/title.png" 
        type = "image/x-icon"> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>RTEA Distribution</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->

    
    

    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
   
 
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="../../Logos/Untitled-1.jpg" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../Logos/title.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome to RTEA Distribution</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
           
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="../../Logos/title.png" alt="Profile image"> <span class="font-weight-normal"> NAme</span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../../Logos/title.png" alt="Profile image">
                 <p class="mb-1 mt-3">Name</p> 
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                <img class="img-xs rounded-circle" src="../../Logos/title.png" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                <?php 
                 include('../../BackEnd/Php/connection.php');
                 $query = mysqli_query($con,"SELECT * FROM `distribution_info` WHERE `Distribution_ID`='$disID'");
                 while($row = mysqli_fetch_array($query)){
                   $name = $row[2];
                 }
                 echo '<p class="profile-name">'.$name.'</p>';
                  ?>
                  <p class="designation">Distributor</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">HOME</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <span class="menu-title">Requests</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Products</span></li>
            <li class="nav-item">
               <a class="nav-link" href="inventryInfo.php">
                <span class="menu-title">TakeOrder</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              
            </li>
            <li class="nav-item">
            <a class="nav-link" href="myOrders.php">
                <span class="menu-title">MYOrders</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="deliverOrder.php">
                <span class="menu-title">ShopDelivery</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Stock </span>
                <i class="icon-chart menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">General Pages</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../Distribution/pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../Distribution/pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../Distribution/pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../Distribution/pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../Distribution/pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item pro-upgrade">
              <span class="nav-link">
                <a class="btn btn-block px-0 btn-rounded btn-upgrade" href="logout.php"> <i class="icon-badge mx-2"></i> LogOut</a>
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
            <!-- Quick Action Toolbar Ends-->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">PRODUCT REQUEST</span>
                          <h5></h5>
                          <span class="report-count"></span>
                        </div>
                        <!-- <div class="inner-card-icon bg-success"> -->
                          <a class="inner-card-icon bg-success" href='home.php'><i class="icon-rocket"></i></a>
                        <!-- </div> -->
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text" >
                          <span class="report-title">MyOrders</span>
                          <h5></h5>
                          <span class="report-count"></span>
                        </div>
                        <button class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </button>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">SHOP QUOTATIONS</span>
                          <h4></h4>
                          <span class="report-count"></span>
                        </div>
                        <button class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </button>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">PRODUCT RETURNS</span>
                          <h4></h4>
                          <span class="report-count"></span>
                        </div>
                        <button class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>   
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Quotations From Shop</h4>
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0">   </a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                    <form action='' Method ='POST'>
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">Shop Name</th>
                            <th class="font-weight-bold">Location</th>
                            <th class="font-weight-bold">Product</th>
                            <th class="font-weight-bold">Quantity</th>
                            <th class="font-weight-bold">Date of Delivery</th>
                            <th> </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              include('../../BackEnd/Php/connection.php');
                              $GetLocation = mysqli_query($con,"SELECT * FROM `shop_info` Where `Location` like '%$DisLocation%'");
                              while($row1 = mysqli_fetch_array($GetLocation))
                               {   
                                $ShopID =$row1[0];
                                 $shopName = $row1[2];
                                 $location = $row1[4];
                                     $query = "SELECT * FROM `dis_shopreq` where `ShopID`='$ShopID' and `Status` = 'Requested'";
                                     $result=mysqli_query($con,$query);
                                         while($row = mysqli_fetch_array($result))
                                             { 
                                                 //$shopId = $row[1];
                                                 $ProductName = $row[2];
                                   
                             
                                   echo '<tr><td>'.$shopName.'</td><td>'. $location .'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td><a  href=php/confirmOrder.php?'.$row[0].' class="btn btn-primary mr-2">Confirm</a></td></tr>' ;
  
                               }
                              }
                              ?>
                          </tbody>
                      </table>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a href="https://www.bootstrapdash.com/">RTEA</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="icon-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>