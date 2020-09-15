<?php 
 
 require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);
$uid = $data['uid'];
if($uid == '')
{
	$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Something Went wrong  try again !");
}
else 
{
	$cy = mysqli_query($con,"select * from address where uid=".$uid."");
	$p = array();
	while($row = mysqli_fetch_assoc($cy))
	{
		$p[] = $row;
	}
	$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Address List Get Successfully!!!","ResultData"=>$p);
}
echo json_encode($returnArr);
mysqli_close($con);
?> 	