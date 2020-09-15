<?php 
ini_set('session.save_path', 'tmp/');
session_start();
require 'db.php';
$getkey = mysqli_fetch_assoc(mysqli_query($con,"select * from setting"));
define('ONE_KEY',$getkey['one_key']);
define('ONE_HASH',$getkey['one_hash']);
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
    <title>Notification Add/Update</title>

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
                            <h4>Notification List And Add/Update Notification</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-heading border bottom">
                                        <h4 class="card-title">Template Add/Update</h4>
                                    </div>
                                    <div class="card-block">
                                        <div class="mrg-top-40">
                                            <div class="row">
                                                <div class="col-md-8 ml-auto mr-auto">
                                                    <?php if(isset($_GET['qid'])) {
                            $udata = mysqli_fetch_assoc(mysqli_query($con,"select * from template where id=".$_GET['qid'].""));
                            ?>
                             <form method="post" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Message</label>
                                                                    <input type="text" placeholder="Enter Message" class="form-control" name="msg" value="<?php echo $udata['message'];?>" required>
                                                                </div>
                                                            </div>
                                                           </div>
                                                           
                                                            <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Title</label>
                                                                    <input type="text" placeholder="Enter Title" class="form-control" value="<?php echo $udata['title'];?>" name="title">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                           
                                                            <div class="row">
                                                            <div class="col-md-12">
                                                               <div class="form-group">
									<label for="cname">select image (optional)</label>
									<input type="file" id="dcharge"  class="form-control"  name="url"   >
									<?php 
									if( $udata['url'] == 'no_url')
									{
									}
									else 
									{
										?>
										<img src="<?php echo $udata['url'];?>" width="100" height="100"/>
										<?php 
									}
									?>
								</div>
                                                            </div>
                                                           </div> 
                                                        
                                                        <div class="row">
                                                           
                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="text-right mrg-top-5">
                                                                    <button type="submit" name="up_quiz" class="btn btn-primary">Update Template</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                            <?php } else {?>
                                                    <form method="post" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Message</label>
                                                                    <input type="text" placeholder="Enter Message" class="form-control" name="msg" required>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Title</label>
                                                                    <input type="text" placeholder="Enter Title" class="form-control" name="title">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                               <div class="form-group">
									<label for="cname">Select Image (optional)</label>
									<input type="file" id="dcharge"  class="form-control"   name="url"  >
								</div>
                                                            </div>
                                                            
                                                        </div>
                                                      
                                                       
                                                        <div class="row">
                                                           
                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="text-right mrg-top-5">
                                                                    <button type="submit" class="btn btn-primary" name="sav_quiz">Create Template</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-heading border bottom">
                                        <h4 class="card-title">Notification List</h4>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-overflow">
                                            <table id="dt-opt" class="table table-lg table-hover">
                                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Title</th>
                                        <th>Message</th>
                                         <th>Url</th>
                                        
                                       
                                       
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                               <tbody>
                                    <?php 
                                    $sel_list = mysqli_query($con,"select * from template");
                                    $i=0;
                                    while($row = mysqli_fetch_assoc($sel_list))
                                    {
                                        $i = $i + 1;
                                    ?>
                                    <tr>
                                       <td><?php echo $i;?></td>
                                       <td><?php echo $row['title'];?></td>
                                       <td style="    min-width: 100px;
    word-break: break-word;"><?php echo $row['message'];?></td>
                                       <td><?php if($row['url'] == 'no_url') { echo $row['url'];}else {?>
                                       <img src="<?php echo $row['url'];?>" width="100" height="100"/>
                                       <?php }?></td>
                                      
                                      
                                        
                                        <td>
                                            <a href="?statusp=notification&qid=<?php echo $row['id'];?>"><i class="ti-bell"></i></a>
                                        <a href="?status=update&qid=<?php echo $row['id'];?>"><i class="fa fa-refresh" aria-hidden="true"></i></a> 
                                        <a href="?statuss=delete&qid=<?php echo $row['id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <?php 
                        if(isset($_GET['statusp']))
                        {
                         $udata = mysqli_fetch_assoc(mysqli_query($con,"select * from template where id=".$_GET['qid'].""));
                         $msg = mysqli_real_escape_string($con,$udata['message']);
                         $title = mysqli_real_escape_string($con,$udata['title']);
                         $url = $udata['url'];
                         
                         $content = array(
			"en" => $title
			);
		
		$fields = array(
			'app_id' => ONE_KEY,
			'included_segments' => array('Active Users'),
			'data' => array("url" =>$url,"message"=>$msg),
			'contents' => $content
		);
		
		$fields = json_encode($fields);
    //	print("\nJSON sent:\n");
    //	print($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
												   'Authorization: Basic '.ONE_HASH));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
		
		date_default_timezone_set('Asia/Kolkata');
        $timestamp = date("Y-m-d H:i:s");
		mysqli_query($con,"insert into noti(`msg`,`date`,`title`,`img`)values('".$msg."','".$timestamp."','".$title."','".$url."')");
		 ?>
        <script>
         
          alert('Notification Send Successfully!!');
            window.location.href="template.php";
        </script>
        <?php 
                        }
                        
                        
    if(isset($_GET['statuss']))
    {
        $qid = $_GET['qid'];
        
        mysqli_query($con,"delete from template where id=".$qid."");
        ?>
        <script>
          //  alert('successfully Delete Category');
          alert('Delete Notification Successfully!!');
            window.location.href="template.php";
        </script>
        <?php 
    }
    ?>
    
    
   
    <?php 
                       if(isset($_POST['sav_quiz'])){
							$msg = mysqli_real_escape_string($con,$_POST['msg']);
	    $url = $_FILES["url"]["name"];
	   $title = mysqli_real_escape_string($con,$_POST['title']);
	   
	   if(empty($url))
	   {
	        $url = 'no_url';
	   }
	   else 
	   {
		   
		   $target_dir = "data/";
$url = $target_dir . basename($_FILES["url"]["name"]);
$imageFileType = strtolower(pathinfo($url,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	?>
	 <script type="text/javascript">
 
		alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
		window.location.href="template.php";
	
  </script>
	<?php 
   
    
}
else 
{
	 move_uploaded_file($_FILES["url"]["tmp_name"], $url);

	   
	  
	    
	  
     
 mysqli_query($con,"insert into template(`message`,`url`,`title`)values('".$msg."','".$url."','".$title."')"); 
							?>
						
							<script type="text/javascript">
 
alert('Notification Added Successfully!!');   
   window.location.href="template.php"; 
	
  
  </script>
  <?php 
  }
	   }
							}
							?>
	
	<?php 
							if(isset($_POST['up_quiz'])){
							$msg = mysqli_real_escape_string($con,$_POST['msg']);
	    $url = $_FILES["url"]["name"];
	   $title = mysqli_real_escape_string($con,$_POST['title']);
	   if(empty($url))
	   {
	       
	   mysqli_query($con,"update template set message='".$msg."',title='".$title."' where id=".$_GET['qid'].""); 

	   }
	   else 
	   {
	     $target_dir = "data/";
$url = $target_dir . basename($_FILES["url"]["name"]);
$imageFileType = strtolower(pathinfo($url,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	?>
	 <script type="text/javascript">
 
    alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
   
		window.location.href="template.php";
	
  </script>
	<?php 
   
    
}
else 
{
	 move_uploaded_file($_FILES["url"]["tmp_name"], $url);
}
 $con->query("update template set message='".$msg."',title='".$title."',url='".$url."' where id=".$_GET['qid'].""); 
	   }
	   
	   
	    
	 
    
?>
						
							<script type="text/javascript">
  
    alert('Notification Update Successfully!!');
  
		window.location.href="template.php";
	
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
<style>
    #dt-opt_wrapper
    {
        overflow:auto;
    }
</style>
</body>


</html>