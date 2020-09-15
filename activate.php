<?php
ini_set('session.save_path', 'tmp/');
session_start();

require 'db.php';
if(isset($_SESSION['username']))
{
    ?>
    <script>
        window.location.href="home.php";
    </script>
    <?php
}
else
{
    
}
?>

<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- plugins css -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendors/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- core css -->
    <link href="assets/css/ei-icon.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="authentication">
            <div class="sign-in-2">
                <div class="container-fluid no-pdd-horizon bg" style="background-image: url('assets/images/others/img-30.jpg')">
                    <div class="row">
                        <div class="col-md-10 mr-auto ml-auto">
                            <div class="row">
                                <div class="mr-auto ml-auto full-height height-100 d-flex align-items-center">
                                    <div class="vertical-align full-height">
                                        <div class="table-cell">
                                            <div class="card">
                                                <div class="card-body">
													<section id="getmsg"></section>
                                                    <div class="pdd-horizon-30 pdd-vertical-30">
                                                        
                                                        <p class="mrg-btm-15 font-size-13">Verify Code</p>
                                                        <form method="post">
                                                            <div class="form-group">
                                                                <input type="text" style="width: 330px;" class="form-control" name="inputEmail" id="inputEmail" placeholder="Enter Envato Purchase Code ">
                                                            </div>
                                                           
                                                           
                                                           
                                                            <div class="mrg-top-20 text-right">
                                                                <button class="btn btn-info" id="sub_log" name="sub_login">Activate</button>
                                                            </div>
                                                        </form>
														
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
    
 <?php 
 include 'assets/js/required_js.php';
 ?>

</body>



</html>