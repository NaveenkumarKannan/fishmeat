<?php 
 
 require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);

$email = $data['email'];

$mobile = $data['mobile'];
$fname = $data['fname'];
$lname = $data['lname'];
$uid = $data['uid'];

if($email == ''  or $mobile == ''  or $uid == '')
{
	$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Something Went wrong  try again !");
}
else 
{
	mysqli_query($con,"update register set fname='".$fname."',lname='".$lname."',mobile='".$mobile."',email='".$email."' where id=".$uid."");
	$pdata = mysqli_fetch_assoc(mysqli_query($con,"select * from register where id=".$uid.""));
	$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Update Profile Successfully!!!","ResultData"=>$pdata);
}
echo json_encode($returnArr);
mysqli_close($con);
?> 