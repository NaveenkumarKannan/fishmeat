<?php 
 
 require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);
$otp = $data['otp'];
$password = $data['password'];
if($otp == '' or $password == '')
{
	$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Something Went wrong  try again !");
}
else 
{
	$count = mysqli_query($con,"select * from register where pin='".$otp."'");
	if($count !=0)
	{
		mysqli_query($con,"update register set password='".$password."' where pin='".$otp."'");
		$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Password Change Successfully!!!");
	}
	else 
	{
		$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Pin Not Matched As we Provide On Mail!");
	}
}
echo json_encode($returnArr);
mysqli_close($con);
?> 
