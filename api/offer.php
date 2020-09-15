<?php 
require 'db.php';

$sel = mysqli_query($con,"select * from offer where status=1");
$k = array();
while($row = mysqli_fetch_assoc($sel))
{
    $k[] = $row;
}
$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Offer List Get Successfully!!","Resultdata"=>$k);

echo json_encode($returnArr);