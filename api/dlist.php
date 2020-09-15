<?php 
 
 require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);
$uid = $data['uid'];
$aid = $data['aid'];
if($uid == '')
{
	$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Something Went wrong  try again !");
}
else 
{
	$cy = mysqli_query($con,"delete from address where uid=".$uid." and id=".$aid."");
	$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Address Delete Successfully!!!");
}
echo json_encode($returnArr);
mysqli_close($con);
?> 	 