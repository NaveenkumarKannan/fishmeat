<?php 
ini_set('session.save_path', '/tmp');
session_start();

require 'db.php';
if(isset($_SESSION['username']))
{
    
}
else
{
    
   ?>
   
    <script>
      window.location.href="index.php";
    </script>
    <?php 
}
?>
<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Fish &amp; Meat Delivery - DashBoard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- plugins css -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendors/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page plugins css -->
    <link rel="stylesheet" href="assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="assets/vendors/nvd3/build/nv.d3.min.css" />

    <!-- core css -->
    <link href="assets/css/ei-icon.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <div class="side-nav-logo">
                        <a href="index.php">
                            <div class="logo logo-dark" style="background-image: url('assets/images/logo/logo.png')"></div>
                            <div class="logo logo-white" style="background-image: url('assets/images/logo/logo-white.png')"></div>
                        </a>
                        <div class="mobile-toggle side-nav-toggle">
                            <a href="#">
                                <i class="ti-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                    <?php require 'side.php';?>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Header START -->
                <div class="header navbar">
                    <?php require 'head.php'; ?>
                </div>
                <!-- Header END -->

               
                        
                    
                
                <!-- Side Panel END -->

                <!-- theme configurator START -->
                <div class="theme-configurator">
                    <div class="configurator-wrapper">
                        <div class="config-header">
                            <h4 class="config-title">Config Panel</h4>
                            <button class="config-close">
                                <i class="ti-close"></i>
                            </button>
                        </div>
                        <div class="config-body">
                            <div class="mrg-btm-30">
                                <p class="lead font-weight-normal">Header Color</p>
                                <div class="theme-colors header-default">
                                    <input type="radio" id="header-default" name="theme">
                                    <label for="header-default"></label>
                                </div>
                                <div class="theme-colors header-primary">
                                    <input type="radio" class="primary" id="header-primary" name="theme">
                                    <label for="header-primary"></label>
                                </div>
                                <div class="theme-colors header-info">
                                    <input type="radio" id="header-info" name="theme">
                                    <label for="header-info"></label>
                                </div>
                                <div class="theme-colors header-success">
                                    <input type="radio" id="header-success" name="theme">
                                    <label for="header-success"></label>
                                </div>
                                <div class="theme-colors header-danger">
                                    <input type="radio" id="header-danger" name="theme">
                                    <label for="header-danger"></label>
                                </div>
                                <div class="theme-colors header-dark">
                                    <input type="radio" id="header-dark" name="theme">
                                    <label for="header-dark"></label>
                                </div>
                            </div>
                            <div class="mrg-btm-30">
                                <p class="lead font-weight-normal">Sidebar Color</p>
                                <div class="theme-colors sidenav-default">
                                    <input type="radio" id="sidenav-default" name="sidenav">
                                    <label for="sidenav-default"></label>
                                </div>
                                <div class="theme-colors side-nav-dark">
                                    <input type="radio" id="side-nav-dark" name="sidenav">
                                    <label for="side-nav-dark"></label>
                                </div>
                            </div>
                            <div class="mrg-btm-30">
                                <p class="lead font-weight-normal no-mrg-btm">RTL</p>
                                <div class="toggle-checkbox checkbox-inline toggle-sm mrg-top-10">
                                    <input type="checkbox" name="rtl-toogle" id="rtl-toogle">
                                    <label for="rtl-toogle"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- theme configurator END -->

                <!-- Theme Toggle Button START -->
                <button class="theme-toggle btn btn-rounded btn-icon">
                    <i class="ti-palette"></i>
                </button>
                <!-- Theme Toggle Button END -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="inline-block">
                                            <h1 class="no-mrg-vertical"><?php echo mysqli_num_rows(mysqli_query($con,"select * from tbl_order"));?></h1>
                                            <p>Total Order</p>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                                </div>
                                
                                <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="inline-block">
                                            <h1 class="no-mrg-vertical"><?php echo mysqli_num_rows(mysqli_query($con,"select * from banner"));?></h1>
                                            <p>Total Banner</p>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                                </div>
                                
                                <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="inline-block">
                                            <h1 class="no-mrg-vertical"><?php echo mysqli_num_rows(mysqli_query($con,"select * from register"));?></h1>
                                            <p>Total User</p>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                                </div>
                                
                               
                                
                                <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="inline-block">
                                            <h1 class="no-mrg-vertical"><?php echo mysqli_num_rows(mysqli_query($con,"select * from register where status=1"));?></h1>
                                            <p>Total Active User</p>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                                </div>
                                
                                <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="inline-block">
                                            <h1 class="no-mrg-vertical"><?php echo mysqli_num_rows(mysqli_query($con,"select * from register where status=0"));?></h1>
                                            <p>Total Deactive User</p>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                                </div>
                                
                                <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="inline-block">
                                            <h1 class="no-mrg-vertical"><?php echo mysqli_num_rows(mysqli_query($con,"select * from product"));?></h1>
                                            <p>Total Product</p>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                                </div>
								
								 <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="inline-block">
                                            <h1 class="no-mrg-vertical"><?php echo mysqli_num_rows(mysqli_query($con,"select * from testimonial"));?></h1>
                                            <p>Total Testimonial</p>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                                </div>
								
								 <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="inline-block">
                                            <h1 class="no-mrg-vertical"><?php echo mysqli_num_rows(mysqli_query($con,"select * from category"));?></h1>
                                            <p>Total Category</p>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                                </div>
                                
                                


                                
                                
                               
                                
                                
                               
                                
                                
                                <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="inline-block">
                                            <h1 class="no-mrg-vertical"><?php $sale = mysqli_fetch_assoc(mysqli_query($con,"select sum(`total`) as total_rupes from tbl_order where status='completed'")); if($sale['total_rupes'] == '') {echo 0;}else{echo $sale['total_rupes']; }?></h1>
                                            <p>Total Sale </p>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                                </div>
                                
                            
                            
                        </div>
                      
                        
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright">
                           <span>Copyright © 2020 <b class="text-dark">Fish &amp; Meat</b>. All rights reserved.</span>
                           
                        </div>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <script src="assets/js/vendor.js"></script>

    <!-- page plugins js -->
    <script src="assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/maps/jquery-jvectormap-us-aea.js"></script>
    <script src="assets/vendors/d3/d3.min.js"></script>
    <script src="assets/vendors/nvd3/build/nv.d3.min.js"></script>
    <script src="assets/vendors/jquery.sparkline/index.js"></script>
    <script src="assets/vendors/chart.js/dist/Chart.min.js"></script>

    <script src="assets/js/app.min.js"></script>

    <!-- page js -->
    <script src="assets/js/dashboard/dashboard.js"></script>

</body>



</html>