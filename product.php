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

function sendMessages($title){
   echo $getkey['one_key'];
		$content = array(
			"en" => 'Product-'.$title.'Updated'
			);
		
		$fields = array(
			'app_id' => ONE_KEY,
			'included_segments' => array('Active Users'),
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
		
		return $response;
	}
	
function sendMessage($title){
    
		$content = array(
			"en" => 'New Product-'.$title
			);
		
		$fields = array(
			'app_id' => ONE_KEY,
			'included_segments' => array('Active Users'),
			'data' => array('type' =>1),
			'contents' => $content
		);
		
		$fields = json_encode($fields);
    	//print("\nJSON sent:\n");
    	//print($fields);
		
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
		
		return $response;
	}
?>


<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Product Add/Update</title>

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
                            <h4>Product List And Add/Update Product</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-heading border bottom">
                                        <h4 class="card-title">Product Add/Update</h4>
                                    </div>
                                    <div class="card-block">
                                        <div class="mrg-top-40">
                                            <div class="row">
                                                <div class="col-md-8 ml-auto mr-auto">
                                                    <?php if(isset($_GET['qid'])) {
                            $udata = mysqli_fetch_assoc(mysqli_query($con,"select * from product where id=".$_GET['qid'].""));
                            ?>
                             <form method="post" enctype="multipart/form-data">
							 
							 <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Select A Category</label>
                                                                    <select name="scat" class="form-control">
																	<option value="0">select a category</option>
																	<?php
$sp = mysqli_query($con,"select * from category where status=1");
while($jl = mysqli_fetch_assoc($sp))
{	
																	?>
																	<option value="<?php echo $jl['id'];?>" <?php if($jl['id'] == $udata['cid']){echo 'selected';}?>><?php echo $jl['title'];?></option>
<?php } ?>
																	</select>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
														
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Title</label>
                                                                    <input type="text" placeholder="Enter Product Title" class="form-control" name="qtitle" value="<?php echo $udata['name'];?>">
                                                                </div>
                                                            </div>
                                                           </div> 
														   
														    <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Price</label>
                                                                    <input type="text" placeholder="Enter Product Price" class="form-control" name="jprice" value="<?php echo $udata['price'];?>">
                                                                </div>
                                                            </div>
                                                           </div> 
														   
														  
														   
														    <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Discount Price</label>
                                                                    <input type="text" placeholder="Enter Product Discount Price" class="form-control" name="dprice" value="<?php echo $udata['discount'];?>">
                                                                </div>
                                                            </div>
                                                           </div> 
														   
														   <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Description</label>
                                                                    <textarea name="pdesc" class="form-control"><?php echo $udata['sdesc'];?></textarea>
                                                                </div>
                                                            </div>
                                                           </div> 
														   
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Image</label>
                                                                    <input type="file" name="qduration" class="form-control">
                                                                    <img src="<?php echo $udata['image'];?>" width="100px" height="100px">
                                                                </div>
                                                            </div>
                                                        </div>
														
														<div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Type</label>
                                                                    <select name="jtype" class="form-control">
																	<option>Select A Type</option>
																	<option value="Pieces" <?php if($udata['types'] == 'Pieces') {echo 'selected';}?>>Pieces</option>
																	<option value="Pack" <?php if($udata['types'] == 'Pack') {echo 'selected';}?> >Pack</option>
																	</select>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
														
														<div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Make Popular?</label>
                                                                    <select name="popular" class="form-control">
																	<option>Select A Popular option</option>
																	<option value="1" <?php if($udata['popular'] == 1){echo 'selected';}?>>Yes</option>
																	<option value="0" <?php if($udata['popular'] == 0){echo 'selected';}?>>No</option>
																	</select>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
														
                                                        
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Send Notification?</label>
                                                                    <select name="snoti" class="form-control">
																
																	<option value="1">Yes</option>
																	<option value="0" selected>No</option>
																	</select>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        	
                                                        
														
														<div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Net</label>
                                                                    <input type="text" placeholder="Enter Product Net" class="form-control" value="<?php echo $udata['net'];?>" name="jcat" class="form-control">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
														
														<div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Gross</label>
                                                                    <input type="text" name="jweight" placeholder="Enter Product Gross" value="<?php echo $udata['gross'];?>" class="form-control">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
														
														<div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>How Many Product Piece OR Packs ?</label>
                                                                    <input type="text" name="pipack" value="<?php echo $udata['pipack'];?>" placeholder="Enter Product Pieces or Packs"  class="form-control">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
														
                                                        <div class="row">
                                                           
                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="text-right mrg-top-5">
                                                                    <button type="submit" name="up_quiz" class="btn btn-primary">Update Product</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                            <?php } else {?>
                                                    <form method="post" enctype="multipart/form-data">
													
													<div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Select A Category</label>
                                                                    <select name="scat" class="form-control">
																	<option value="0">select a category</option>
																	<?php
$sp = mysqli_query($con,"select * from category where status=1");
while($jl = mysqli_fetch_assoc($sp))
{	
																	?>
																	<option value="<?php echo $jl['id'];?>"><?php echo $jl['title'];?></option>
<?php } ?>
																	</select>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
														
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Title</label>
                                                                    <input type="text" placeholder="Enter Product Title" class="form-control" name="qtitle" required>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
														
														<div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Price</label>
                                                                    <input type="text" placeholder="Enter Product Price" class="form-control" name="jprice" required>
                                                                </div>
                                                            </div>
                                                           </div> 
                                                      
													   <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Discount Price</label>
                                                                    <input type="text" placeholder="Enter Product Discount Price" class="form-control" name="dprice" value="0">
                                                                </div>
                                                            </div>
                                                           </div>

<div class="row">
                                                           
                                                           </div>														   
														   
														   <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Description</label>
                                                                    <textarea name="pdesc" class="form-control" required></textarea>
                                                                </div>
                                                            </div>
                                                           </div>
														   
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>product Image</label>
                                                                    <input type="file" name="qduration"  class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </div>
														
														<div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Type</label>
                                                                    <select name="jtype" class="form-control">
																	<option>Select A Type</option>
																	<option value="Pieces">Pieces</option>
																	<option value="Pack">Pack</option>
																	</select>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
														
														<div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Make Popular?</label>
                                                                    <select name="popular" class="form-control">
																	<option>Select A Popular option</option>
																	<option value="1">Yes</option>
																	<option value="0">No</option>
																	</select>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Send Notification?</label>
                                                                    <select name="snoti" class="form-control">
																
																	<option value="1">Yes</option>
																	<option value="0" selected>No</option>
																	</select>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
														
														<div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Net</label>
                                                                    <input type="text" placeholder="Enter Product Net" class="form-control" required  name="jcat" class="form-control">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
														 
														<div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Gross</label>
                                                                    <input type="text" name="jweight" placeholder="Enter Product Gross"  class="form-control" required>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
														
														<div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>How Many Product Piece OR Packs ?</label>
                                                                    <input type="text" name="pipack" placeholder="Enter Product Pieces or Packs"  class="form-control" required>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
														
                                                        <div class="row">
                                                           
                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="text-right mrg-top-5">
                                                                    <button type="submit" class="btn btn-primary" name="sav_quiz">Upload Product</button>
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
                                        <h4 class="card-title">Product List</h4>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-overflow">
                                            <table id="dt-opt" class="table table-lg table-hover">
                                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
										<th>Product Category</th>
                                        <th>Product Title</th>
										<th>Product Description</th>
                                         <th>Product Net</th>
                                         <th>Product Price</th>
										 <th>Product Discount</th>
                                        <th>Product Image</th>
										<th>Product Gross</th>
										<th>Piece/Pack</th>
										<th>Product Type</th>
										
										
                                        <th>Status</th>
                                       <th>Product Tax</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                               <tbody>
                                    <?php 
                                    $sel_list = mysqli_query($con,"select * from product");
                                    $i=0;
                                    while($row = mysqli_fetch_assoc($sel_list))
                                    {
                                        $i = $i + 1;
                                    ?>
                                    <tr>
                                       <td><?php echo $i;?></td>
									    <td><?php $cv = mysqli_fetch_assoc(mysqli_query($con,"select * from category where id=".$row['cid']."")); echo $cv['title'];?></td>
                                       <td><?php echo $row['name'];?></td>
                                       <td style="word-break: break-all;
    min-width: 266px;"><?php echo $row['sdesc'];?></td>
                                       
									   <td><?php echo $row['net'];?></td>
									   <td><?php echo $row['price'];?></td>
									   <td><?php echo $row['discount'];?></td>
									   <td><img src="<?php echo $row['image'];?>" width="100px" height="100px"/></td>
									    <td><?php echo $row['gross'];?></td>
										<td><?php echo $row['pipack'];?></td>
										<td><?php echo $row['types'];?></td>
                                       <td><?php if($row['status'] == 1){?>
                                       <a href="?s=0&pid=<?php echo $row['id'];?>"><button class="btn btn-danger">Deactive</button></a>
                                       <?php }else{?>
                                       <a href="?s=1&pid=<?php echo $row['id'];?>"><button class="btn btn-primary">Active</button></a>
                                       <?php }?></td>
                                        <td><?php echo $row['tax'];?></td>
                                        <td style="min-width:140px;">
                                        <a href="?status=update&qid=<?php echo $row['id'];?>" title="Edit"><button class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></button></a> 
                                        <a href="?statuss=delete&qid=<?php echo $row['id'];?>" title="Delete"><button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
						#dt-opt_wrapper
						{
						 overflow:auto;	
						}
						</style>
                        <?php 
    if(isset($_GET['statuss']))
    {
        $qid = $_GET['qid'];
        mysqli_query($con,"delete from product where id=".$qid."");
        
        ?>
        <script>
            alert('successfully Delete product');
           // alert('You Use Demo So It Can not Delete Product!!');
            window.location.href="product.php";
        </script>
        <?php 
    }
    ?>
    
    
    <?php 
    if(isset($_GET['s']))
    {
        $qid = $_GET['s'];
        mysqli_query($con,"update product set status=".$qid." where id=".$_GET['pid']."");
        
        ?>
        <script>
            alert('successfully Change Status ');
          //alert('You Use Demo So It Can not Change Status!!');
            window.location.href="product.php";
        </script>
        <?php 
    }
    ?>
    
                        <?php 
	if(isset($_POST['sav_quiz']))
	{
	    $qtitle = mysqli_real_escape_string($con,$_POST['qtitle']);
        $pdesc =  mysqli_real_escape_string($con,$_POST['pdesc']);	 
	 $jprice = $_POST['jprice'];
	    $target_dir = "product/";
		$jcat = $_POST['jcat'];
		$scat = $_POST['scat'];
		$popular = $_POST['popular'];
		$dprice	= $_POST['dprice'];
		$jtype = $_POST['jtype'];
			$snoti = $_POST['snoti'];
		$jweight = $_POST['jweight'];
	    $names = mysqli_real_escape_string($con,uniqid().$_FILES["qduration"]["name"]);
$target_file = $target_dir . basename($names);
	    $pipack = $_POST['pipack'];
	     if($snoti == 1)
        {
           
        sendMessage($qtitle);
	 date_default_timezone_set('Asia/Kolkata');
        
		
		$timestamp = date("Y-m-d H:i:s");
		$title = 'New Product '.$pname.' Added';
		$url = 'no_url';
		$msg = "our Store New Product Inserted";
	$con->query("insert into noti(`msg`,`date`,`title`,`img`)values('".$msg."','".$timestamp."','".$title."','".$url."')");
	
        }
        
      mysqli_query($con,"insert into product(`name`,`image`,`price`,`cid`,`types`,`net`,`gross`,`sdesc`,`discount`,`pipack`,`popular`)values('".$qtitle."','".$target_file."','".$jprice."',".$scat.",'".$jtype."','".$jcat."','".$jweight."','".$pdesc."','".$dprice."','".$pipack."',".$popular.")");
     move_uploaded_file($_FILES["qduration"]["tmp_name"], $target_file);
     
      ?>
      <script>
          alert('product Save Successfully!!');
     // alert('You Use Demo So It Can not Insert Product!!');
          window.location.href="product.php"; 
      </script>
      <?php 
	}
	?>
	
	<?php 
	if(isset($_POST['up_quiz']))
	{
	   $qtitle = mysqli_real_escape_string($con,$_POST['qtitle']);
        $pdesc =  mysqli_real_escape_string($con,$_POST['pdesc']);	 
	 $jprice = $_POST['jprice'];
	    $target_dir = "product/";
		$jcat = $_POST['jcat'];
		$scat = $_POST['scat'];
		$popular = $_POST['popular'];
			$snoti = $_POST['snoti'];
		$dprice	= $_POST['dprice'];
		$jtype = $_POST['jtype'];
		$jweight = $_POST['jweight'];
		$pipack = $_POST['pipack'];
	    $names = mysqli_real_escape_string($con,uniqid().$_FILES["qduration"]["name"]);
$target_file = $target_dir . basename($names);
if($snoti == 1)
        {
             $title = 'Product '.$pname.' Updated';  
        sendMessages($qtitle);
	 date_default_timezone_set('Asia/Kolkata');
         $timestamp = date("Y-m-d H:i:s");
		$url = 'no_url';
		$msg = "our Store Product Updated";
		$con->query("insert into noti(`msg`,`date`,`title`,`img`)values('".$msg."','".$timestamp."','".$title."','".$url."')");
	}
        
 if($_FILES["qduration"]["name"] != '')
 {
	    mysqli_query($con,"update product set name='".$qtitle."',image='".$duration."',pipack='".$pipack."',popular=".$popular.",price='".$jprice."',sdesc='".$pdesc."',discount='".$dprice."',net='".$jcat."',gross='".$jweight."',cid=".$scat.",types='".$jtype."',image='".$target_file."' where id=".$_GET['qid']."");
  move_uploaded_file($_FILES["qduration"]["tmp_name"], $target_file);
     
 }
 else
 {
    mysqli_query($con,"update product set name='".$qtitle."',price='".$jprice."',pipack='".$pipack."',popular=".$popular.",sdesc='".$pdesc."',discount='".$dprice."',net='".$jcat."',gross='".$jweight."',cid=".$scat.",types='".$jtype."' where id=".$_GET['qid']."");
 }
	    ?>
	     <script>
          alert('Update product  Successfully!!');
         // alert('You Use Demo So It Can not Update Product!!');
          window.location.href="product.php";
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

</body>


</html>