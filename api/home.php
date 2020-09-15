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
	$v = array();
	$cp = array();
	$d = array();
	$c = array();
	
	$ban = mysqli_query($con,"select banner_img from banner where status=1");
	while($r = mysqli_fetch_assoc($ban))
	{
		$v[] = $r;
	}
	
	$cat = mysqli_query($con,"select * from category where status=1 limit 6");
	while($rs = mysqli_fetch_assoc($cat))
	{
		$p['id'] = $rs['id'];
		$p['title'] = $rs['title'];
		$p['img'] = $rs['img'];
		$p['count'] = mysqli_num_rows(mysqli_query($con,"select * from product where cid=".$rs['id']." and status=1"));
		$c[] = $p;
	}
	
	$prod = mysqli_query($con,"select * from product where status=1 and popular = 1 order by id desc ");
	while($rp = mysqli_fetch_assoc($prod))
	{
		$cp[] = $rp;
	}
	
	$cats = mysqli_query($con,"select name,message from testimonial where status=1");
	while($rss = mysqli_fetch_assoc($cats))
	{
		$d[] = $rss;
	}
	
	$udata = mysqli_fetch_assoc(mysqli_query($con,"select * from register where id=".$uid.""));
	$date_time = $udata['rdate'];
	
$remain = mysqli_num_rows(mysqli_query($con,"select * from noti where date >='".$date_time."'"));

	$read = mysqli_num_rows(mysqli_query($con,"select * from uread where uid=".$uid.""));
	$r_noti = $remain - $read;
	$curr = mysqli_fetch_assoc(mysqli_query($con,"select * from setting"));
	
	$kp = array('Banner'=>$v,'Catlist'=>$c,'Productlist'=>$cp,'Testimonial'=>$d,"Main_Data"=>$curr,'Remain_notification'=>$r_noti);

	$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Data Get Successfully!","ResultData"=>$kp);
}
echo json_encode($returnArr);
mysqli_close($con);