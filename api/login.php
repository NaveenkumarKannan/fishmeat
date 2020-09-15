<?php 
 
 require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];
$password = $data['password'];

if ($email == '' or $password == '')
{
$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Something Went wrong  try again !");
}
else 
{
	$sel = mysqli_num_rows(mysqli_query($con,"select * from register where email='".$email."' and password='".$password."' and status=1"));
	if($sel != 0 )
	{
		$k  = mysqli_fetch_assoc(mysqli_query($con,"select * from register where email='".$email."' and password='".$password."' and status=1"));
		
		$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"login Successfully!","ResultData"=>$k);
	}
	else 
	{
		$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Username/Email and Password Mismatch!");
	}
}
echo json_encode($returnArr);
mysqli_close($con);
?> 