<?php 
require 'db.php';

$sel = mysqli_query($con,"select * from category where status=1");
$k = array();
$p = array();
while($row = mysqli_fetch_assoc($sel))
{
       $p['id'] = $row['id'];
		$p['title'] = $row['title'];
		$p['img'] = $row['img'];
		$p['count'] = mysqli_num_rows(mysqli_query($con,"select * from product where cid=".$row['id'].""));
		$k[] = $p;
}
$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Category List Get Successfully!!","Catlist"=>$k);

echo json_encode($returnArr);
mysqli_close($con);