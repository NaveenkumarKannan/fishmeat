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
    <title>User Address List</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- plugins css -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendors/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css" />
     <link rel="stylesheet" href="assets/vendors/datatables/media/css/jquery.dataTables.css" />

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
                    <?php require 'head.php';?>
                </div>
                <!-- Header END -->

                <!-- Side Panel START -->
                <div class="side-panel">
                    <div class="side-panel-wrapper bg-white">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link" href="#chat" role="tab" data-toggle="tab">
                                    <span>Chat</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#profile" role="tab" data-toggle="tab">
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#todo-list" role="tab" data-toggle="tab">
                                    <span>Todo</span>
                                </a>
                            </li>
                            <li class="panel-close">
                                <a class="side-panel-toggle" href="javascript:void(0);">
                                    <i class="ti-close"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- chat START -->
                            
                            <!-- chat END -->
                            <!-- profile START -->
                           
                            <!-- profile END -->
                            <!-- todo START -->
                            
                        </div>
                    </div>
                </div>
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
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-heading border bottom">
                                        <h4 class="card-title">User Address List</h4>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-overflow">
                                            <table id="dt-opt" class="table table-lg table-hover">
                                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
										<th>Address</th>
										<th>Type</th>
                                       
                                       
                                        
                                    </tr>
                                </thead>
                                               <tbody>
                                    <?php 
                                    $sel_list = mysqli_query($con,"select * from address where uid=".$_GET['aid']."");
                                    $i=0;
                                    while($row = mysqli_fetch_assoc($sel_list))
                                    {
                                        $i = $i + 1;
                                    ?>
                                    <tr>
                                       <td><?php echo $i;?></td>
									    
                                       <td><?php echo $row['add1'].' ,'.$row['add2'].','.$row['city'].','.$row['state'].','.$row['pincode'];?></td>
                                       <td><?php echo $row['type'];?></td>
                                       
									  
                                        
                                        
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                                            </table>
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

    <script src="assets/js/app.min.js"></script>

    <!-- page plugins js -->
    <script src="assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- page js -->
     <script src="assets/vendors/datatables/media/js/jquery.dataTables.js"></script>

    <!-- page js -->
    <script src="assets/js/table/data-table.js"></script>
    <script src="assets/js/forms/form-validation.js"></script>

</body>


</html>