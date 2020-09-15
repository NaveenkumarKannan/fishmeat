<?php 
require 'db.php';

$data = json_decode(file_get_contents('php://input'), true);
$uid = $data['uid'];

if ($uid == '')
{
$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Somethings Went wrong  try again !");
}
else 
{
$w = mysqli_query($con,"select * from tbl_order where uid=".$uid." order by id desc");
$p = array();
$vp =  array();
while($r = mysqli_fetch_assoc($w))
{
	$p['orderid'] = $r['id'];
	$p['odate'] = $r['odate'];
	$p['total_price'] = $r['total'];
	$p['otype'] = $r['type'];
	$p['status'] = $r['status'];
	$ps = explode(',',$r['pid']);
	$pq = explode(',',$r['qty']);
	
	$cp = count($ps);
	
	$v = array();
	$ph = array();
	for($i=0;$i<$cp;$i++)
	{
		
		$f = mysqli_fetch_assoc(mysqli_query($con,"select * from product where id=".$ps[$i].""));
		
		$v['title'] = $f['name'];
		
		$v['image'] = $f['image'];
		$v['price'] = $f['price'];
		$v['quantity'] = $pq[$i];
		$ph[] = $v;
	}
	$p['listdata'] = $ph;
	$vp[] = $p;
}
$returnArr = array("ResponseCode"=>"401","Result"=>"true","ResponseMsg"=>"Order List Get Successfully!!","OrderData"=>$vp);	
}
echo json_encode($returnArr);
mysqli_close($con);
?> 