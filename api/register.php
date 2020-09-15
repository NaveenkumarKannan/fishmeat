<?php 
 
 require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);

$email = $data['email'];
$password = $data['password'];
$mobile = $data['mobile'];
$city = $data['city'];
$fname = $data['fname'];
$lname = $data['lname'];

if($email == '' or $password == '' or $mobile == '' or $city == '')
{
	$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Something Went wrong  try again !");
}
else 
{
	$countm = mysqli_num_rows(mysqli_query($con,"select * from register where mobile='".$mobile."'"));
   $counte = mysqli_num_rows(mysqli_query($con,"select * from register where email='".$email."'"));
   if($countm != 0)
   {
	  
		$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Mobile Number Already Used !");
   }
   else if($counte != 0)
   {
	  $returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Email Address Already Used !");
   }
   else 
   {
	   date_default_timezone_set('Asia/Kolkata');
	   $timestamp = date("Y-m-d H:i:s");
	mysqli_query($con,"insert into register(`email`,`password`,`mobile`,`city`,`fname`,`lname`,`rdate`)values('".$email."','".$password."','".$mobile."','".$city."','".$fname."','".$lname."','".$timestamp."')");
	$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Register Successfully!!!");
}
}
echo json_encode($returnArr);
mysqli_close($con);
?> 