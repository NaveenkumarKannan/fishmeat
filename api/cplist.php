<?php 
require 'db.php';

$sel = mysqli_query($con,"select * from category where status=1");
$k = array();
$p = array();
while($row = mysqli_fetch_assoc($sel))
{
	$k['id'] = $row['id'];
	$k['title'] = $row['title'];
	$k['img'] = $row['img'];
	$plist = mysqli_query($con,"select * from product where cid=".$row['id']." and status=1");
	$kk = array();
	while($g = mysqli_fetch_assoc($plist))
	{
		$kk[] = $g;
	}
	$k['productlist'] = $kk; 
	$p[] = $k;
	}
	$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Category List Get Successfully!!","cplist"=>$p);

echo json_encode($returnArr);
mysqli_close($con);	