<?php 
 
 require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);
$uid = $data['uid'];

if ($uid == '')
{
$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Something Went wrong  try again !");
}
else 
{
$udata = mysqli_fetch_assoc(mysqli_query($con,"select * from register where id=".$uid.""));
	$date_time = $udata['rdate'];
$sel = mysqli_query($con,"select * from noti where date >='".$date_time."' order by id desc");
$myarray = array();
$p = array();
while($row = mysqli_fetch_assoc($sel))
{
    $count = mysqli_num_rows(mysqli_query($con,"select * from uread where uid=".$uid." and nid=".$row['id'].""));
    $myarray['id'] = $row['id'];
    $myarray['title'] = $row['title'];
    $myarray['img'] = $row['img'];
    $myarray['msg'] = $row['msg'];
    $myarray['date'] = $row['date'];
    $myarray['IS_READ'] = $count;
    $p[] = $myarray;
}
$returnArr = array("data"=>$p,"ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Notification List Founded!");
}
echo json_encode($returnArr);
?>