<?php 
 
 require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);
$uid = $data['uid'];
$add1 = mysqli_real_escape_string($con,$data['add1']);
$add2 = mysqli_real_escape_string($con,$data['add2']);
$pincode = $data['pincode'];
$city = $data['city'];
$state = $data['state'];
$aid = $data['aid'];

$type = $data['type'];
if($city == '' or $add1 == '' or $pincode == '' or $state == '' or $aid == '' or $type == '')
{
	$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Something Went wrong  try again !");
}
else 
{
	if($aid == 0)
	{
	mysqli_query($con,"insert into address(`uid`,`add1`,`add2`,`pincode`,`city`,`state`,`type`)values(".$uid.",'".$add1."','".$add2."',".$pincode.",'".$city."','".$state."','".$type."')");
	$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Address Saved Successfully!!!");
	}
	else 
	{
		mysqli_query($con,"update address set add1='".$add1."',add2='".$add2."',pincode=".$pincode.",city='".$city."',state='".$state."',type='".$type."' where id=".$aid."");
		$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Address Updated Successfully!!!");
	}
}
echo json_encode($returnArr);
mysqli_close($con);
?> 