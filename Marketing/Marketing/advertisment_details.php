<?php
SESSION_START();
if(!isset($_SESSION['id'])){
  echo $_SESSION['id'];
	header('location:index.html');
 }
 else{
   $id=$_SESSION['id'];
 
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
    <title>RTEA MARKETING</title>
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
    <link rel="stylesheet" href="../../Distribution/Distribution/css/style.css "> <!-- End layout styles -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="../../Logos/Untitled-1.jpg" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../Distribution/Distribution/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome to RTEA Marketing</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <!-- <form class="search-form d-none d-md-block" action="#" method="POST" >
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form> -->
            <!-- <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../Distribution/Distribution/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../Distribution/Distribution/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../Distribution/Distribution/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <i class="flag-icon flag-icon-us"></i>
                </div>
                <span class="profile-text font-weight-normal">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-us"></i> English </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-fr"></i> French </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ae"></i> Arabic </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ru"></i> Russian </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="../../Distribution/Distribution/images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> Henry Klein </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../../Distribution/Distribution/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul> -->
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../../Logos/title.png" alt="profile image">
                  <!-- <div class="dot-indicator bg-success"></div> -->
                </div>
                <div class="text-wrapper">
                <?php
               include('../../BackEnd/Php/connection.php');
               $proname = mysqli_query($con,"SELECT * FROM `inventory` where `id`='$id'");
               {
                 while($row = mysqli_fetch_array($proname)){
                   $companyname = $row[2];
                 }
               }
               echo '<p class="profile-name">'.$companyname.'</p>';
                ?>
                  <!-- <p class="profile-name">Allen Moreno</p> -->
                  <p class="designation">Inventory</p>
                </div>
                <!-- <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div> -->
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Home</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <span class="menu-title">HOME</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link" >MORE DETAILS</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="advertisment_details.php" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">MY ADS</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="payADD.php">
                <span class="menu-title">PAY ADDS</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="../../Distribution/Distribution/pages/forms/basic_elements.html">
                <span class="menu-title">UPDATE</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="sales.php">
                <span class="menu-title">SALES</span>
                <i class="icon-chart menu-icon"></i>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="../../Distribution/Distribution/pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">General Pages</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../Distribution/Distribution/pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
              </div>
            </li> -->
            <li class="nav-item pro-upgrade">
              <span class="nav-link">
                <a class="btn btn-block px-0 btn-rounded btn-upgrade" href="https://www.bootstrapdash.com/product/stellar-admin-template/" target="_blank"> <i class="icon-badge mx-2"></i> Finish</a>
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
              <div class="col-lg-12 grid-margin stretch-card"> 
                  <div class="card">
                    <div class="card-body">
                    <h3 class="page-title">ADVERTISEMENT</h3>
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Charts</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Chartist</li>
                </ol>
              </nav> -->
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> PRODUCT NAME </th>
                  <th> Add </th>
                  <th> NUmber of ADD placed in shop </th>
                  <th> NUmber of ADD placed in USer </th>
                  <th> price Paid </th>
                  <!-- <th> AMOUNT </th> -->
                </tr>
              </thead>
              <tbody>
                
           
            <?php
include('../../BackEnd/Php/connection.php');
  $query = mysqli_query($con,"SELECT * FROM `market_ads` where `invID` = '$id'");
  while ($row = mysqli_fetch_array($query)){
    $proID = $row[2];
    $addid = $row[3];
    $prductId =mysqli_query($con,"SELECT * FROM `shop_products` where `Product_ID` = '$proID'");
    while ($row1 = mysqli_fetch_array($prductId)){
      $amount =mysqli_query($con,"SELECT * FROM `market_membership` where `add_id`='$addid'");
      while ($row2 = mysqli_fetch_array($amount)){
     echo '<tr><td>'.$row1[1].'</td><td><img style="height : 90px; width:80px"  src="../images/'.$row[3].'.jpg"></td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row2[3].'</td></tr>';
  }
}
  }



?>
   </tbody>
            </table>
            <!-- <div class="row">
              <div class="col-lg-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Company</h4>
                    <div class="ct-chart ct-perfect-fourth" id="ct-chart-line"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Slot number</h4>
                    <div id="rickshaw-time-scale"></div>
                    <div class="ct-chart ct-perfect-fourth" id="ct-chart-line-scatterer"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Amound</h4>
                    <div class="ct-chart ct-perfect-fourth" id="ct-chart-line"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bargain</h4>
                    <div class="ct-chart ct-perfect-fourth" id="ct-chart-line"></div>
                  </div>
                </div>
              </div>-->
            </div>
          </div> 
          
          <!-- <div class="col-lg-12" style="text-align: center;">
            <button type="submit" class="btn btn-primary mr-4">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </div> -->
              
          
          
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="#" target="_blank">RTEA</a>. All rights reserved.</span>
              <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span> -->
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
    <script src="../../Distribution/Distribution//vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../Distribution/Distribution//vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../Distribution/Distribution//js/off-canvas.js"></script>
    <script src="../../Distribution/Distribution//js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../js/chartist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>