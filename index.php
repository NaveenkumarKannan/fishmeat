<?php
ini_set('session.save_path', '/tmp');
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
                                                    <div class="pdd-horizon-30 pdd-vertical-30">
                                                        
                                                        <p class="mrg-btm-15 font-size-13">Please enter your user name and password to login</p>
                                                        <form method="post">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="username" placeholder="User name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                                            </div>
                                                           
                                                           
                                                            <div class="mrg-top-20 text-right">
                                                                <button class="btn btn-info" type="submit" name="sub_login">Login</button>
                                                            </div>
                                                        </form>
														<?php 
														$g = mysqli_fetch_assoc(mysqli_query($con,"select * from admin"));
														?>
                                                        <div class="border p-2">
                                                        	<h5><strong>Admin Login</strong></h5>
                                                        	<p>User: <?php echo $g['username'];?> <br>Password: <?php echo $g['password'];?></p>
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
    </div>

 <?php 
    if(isset($_POST['sub_login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $count = mysqli_num_rows(mysqli_query($con,"select * from admin where username='".$username."' and password='".$password."'"));
        if($count != 0)
        {
           $_SESSION['username'] = $_POST['username'] ;
            
           ?>
           <script>
        window.location.href="home.php";
    </script>
           <?php 
        }
        else
        {
           ?>
           <script>
               alert('wrong data');
           </script>
           <?php 
        }
        
    }
    ?>
    
  <?php 
 include 'assets/js/required_js.php';
 ?>

</body>



</html>