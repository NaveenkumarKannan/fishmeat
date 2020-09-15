<?php 
 
 require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);

$name = $data['name'];

$q = mysqli_query($con,"select * from product where name like '%".$name."%'"); 
$kp = array();
$count = mysqli_num_rows($q);
if($count != 0)
{
while($row = mysqli_fetch_assoc($q))
{
	$kp[] = $row;
	
	}
$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Product List Get Successfully!!","Productlist"=>$kp);	
}
else 
{
	$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Product Not Find!!","Productlist"=>$kp);
}
echo json_encode($returnArr);
mysqli_close($con);