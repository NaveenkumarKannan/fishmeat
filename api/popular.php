<?php 
require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);
$cid = $data['cid'];
$uid = $data['uid'];
if($uid == '')
{
	$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Something Went Wrong!!!");
}
else 
{
$q = mysqli_query($con,"select * from product where status=1 order by rand() limit 5");
$k = array();
while($row = mysqli_fetch_assoc($q))
{
	$k[] = $row;
	
	}
$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Product List Get Successfully!!","Productlist"=>$k);	
}
echo json_encode($returnArr);
mysqli_close($con);