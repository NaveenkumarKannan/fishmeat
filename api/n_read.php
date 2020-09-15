<?php 
 
 require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);
$uid = $data['uid'];
$nid = $data['nid'];

if ($uid == '' or $nid == '')
{
$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Something Went wrong  try again !");
}
else 
{
	$sel = mysqli_num_rows(mysqli_query($con,"select * from uread where uid=".$uid." and nid=".$nid.""));
	if($sel != 0 )
	{
	    
	    $returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Notification Already Read!!");
	    
		
		
	}
	else 
	{
	    mysqli_query($con,"insert into uread(`uid`,`nid`)values(".$uid.",".$nid.")");
	    $udata = mysqli_fetch_assoc(mysqli_query($con,"select * from register where id=".$uid.""));
	$date_time = $udata['rdate'];
	
$remain = mysqli_num_rows(mysqli_query($con,"select * from noti where date >='".$date_time."'"));

	$read = mysqli_num_rows(mysqli_query($con,"select * from uread where uid=".$uid.""));
	$r_noti = $remain - $read;
	    
		$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"notification read Successfully!","Remain_notification"=>$r_noti);
	}
}
echo json_encode($returnArr);
mysqli_close($con);
?>