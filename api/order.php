<?php 
 
 require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);
$uid = $data['uid'];
$pid = $data['pid'];
$qty = $data['qty'];
$total = $data['total'];
$aid = $data['aid'];
$date = $data['date'];
$type = $data['type'];

if ($uid == '' or $pid == '' or $qty == '' or $total == '' or $aid == '' or $type == '')
{
$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Somethings Went wrong  try again !");
}
else 
{
$sel = mysqli_num_rows(mysqli_query($con,"select * from register where id=".$uid." and status=1"));	
if($sel != 0)
{
	date_default_timezone_set('Asia/Kolkata');
     $timestamp = date("Y-m-d");
	mysqli_query($con,"insert into tbl_order(`uid`,`pid`,`qty`,`total`,`aid`,`type`,`odate`,`status`)values(".$uid.",'".$pid."','".$qty."',".$total.",".$aid.",'".$type."','".$timestamp."','pending')");
	$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Order Placed Successfully!!!");
}
else 
{
	$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"You are Not Eligible For Order!!!");
}
}
echo json_encode($returnArr);
mysqli_close($con);
?> 
