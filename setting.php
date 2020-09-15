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
    <title>Update Setting</title>

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
                        <div class="page-title">
                            <h4>Update Setting</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-heading border bottom">
                                        <h4 class="card-title">Setting</h4>
                                    </div>
                                    <div class="card-block">
                                        <div class="mrg-top-40">
                                            <div class="row">
                                                <div class="col-md-8 ml-auto mr-auto">
                                                    <?php 
                            $udata = mysqli_fetch_assoc(mysqli_query($con,"select * from setting"));
                            ?>
                             <form method="post" >
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>OneSignal Key</label>
                                                                    <input type="text" placeholder="Enter Onesignal Key" class="form-control" name="qtitle" value="<?php echo $udata['one_key'];?>" required>
                                                                </div>
                                                            </div>
                                                           </div> 
                                                           
                                                            <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>OneSignal Hash</label>
                                                                    <input type="text" placeholder="Enter One signal Hash" class="form-control" name="qtitles" value="<?php echo $udata['one_hash'];?>" required>
                                                                </div>
                                                            </div>
                                                           </div> 
														   
														    <div class="row">
                                                            <div class="col-md-12">
                                                               <div class="form-group">
									<label for="cname">Order Min Value</label>
									<input type="text" id="cname" class="form-control"  name="omin" value="<?php echo $udata['o_min'];?>" required >
								</div>
                                                            </div>
                                                           </div> 
														   
														   
														    <div class="row">
                                                            <div class="col-md-12">
                                                               <div class="form-group">
									<label for="cname">Razorpay Key</label>
									<input type="text" id="cname" class="form-control"  name="raz_key" value="<?php echo $udata['raz_key'];?>" required >
								</div>
                                                            </div>
                                                           </div> 
														   
														    <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
									<label for="cname">Currency</label>
									<input type="text" id="cname" class="form-control"  name="currency" value="<?php echo $udata['currency'];?>" required >
								</div>
                                                            </div>
                                                           </div> 
														   
														    <div class="row">
                                                            <div class="col-md-12">
                                                               <div class="form-group">
								
								
									<label for="cname">Contact Us</label>
									<textarea class="form-control" rows="5" name="c_data" style="resize: none;" required><?php echo $udata['contact_us'];?></textarea>
								</div>
                                                            </div>
                                                           </div> 
														   
														    <div class="row">
                                                            <div class="col-md-12">
                                                               <div class="form-group">
									<label for="cname">Privacy Policy</label>
									<textarea class="form-control" rows="5" name="p_data" style="resize: none;" required><?php echo $udata['privacy_policy'];?></textarea>
								</div>
                                                            </div>
                                                           </div> 
														   
														    <div class="row">
                                                            <div class="col-md-12">
                                                                	<div class="form-group">
									<label for="cname">About Us</label>
									<textarea class="form-control" rows="5" name="a_data" style="resize: none;" required><?php echo $udata['about_us'];?></textarea>
								</div>
                                                            </div>
                                                           </div> 
														   
														    <div class="row">
                                                            <div class="col-md-12">
                                                               <div class="form-group">
								
								
									<label for="cname">Terms & Conditions</label>
									<textarea class="form-control" rows="5" name="terms" style="resize: none;" required><?php echo $udata['terms'];?></textarea>
								</div>
                                                            </div>
                                                           </div> 
                                                       
                                                        <div class="row">
                                                           
                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="text-right mrg-top-5">
                                                                    <button type="submit" name="up_quiz" class="btn btn-primary">Update Setting</button>
                                                                </div>
                                                            </div>
                                                        </div>
														
                                                    </form>
                                                    
                         
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                        
   
    
    
   
    
                        
	
	<?php 
	if(isset($_POST['up_quiz']))
	{
	    $qtitle = mysqli_real_escape_string($con,$_POST['qtitle']);
	    $qtitles = mysqli_real_escape_string($con,$_POST['qtitles']);
	   $p_data = $_POST['p_data'];
							$a_data = $_POST['a_data'];
							$c_data = $_POST['c_data'];
							$terms = $_POST['terms'];
							$omin = $_POST['omin'];
							$raz_key = $_POST['raz_key'];
							$currency = mysqli_real_escape_string($con,$_POST['currency']);
	    
	  
    mysqli_query($con,"update setting set one_key='".$qtitle."',one_hash='".$qtitles."',currency='".$currency."',raz_key='".$raz_key."',privacy_policy='".$p_data."',about_us='".$a_data."',contact_us='".$c_data."',terms='".$terms."',o_min=".$omin." where id=1"); 
 
	    ?>
	     <script>
          alert('Update Setting  Successfully!!');
    
          window.location.href="setting.php";
      </script>
	    <?php 
	}
	?>
                        
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
<script src="https://cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>
 <script>
 CKEDITOR.editorConfig = function (config) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('p_data');


 CKEDITOR.editorConfig = function (config) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('a_data');

CKEDITOR.editorConfig = function (config) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('c_data');

CKEDITOR.editorConfig = function (config) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('terms');

 
 </script>

</body>


</html>