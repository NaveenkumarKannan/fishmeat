<?php 
require 'db.php';
header('Content-type: text/json');
$sel = mysqli_query($con,"select * from area_db where status=1");
while($row = mysqli_fetch_assoc($sel))
{
    $myarray[] = $row;
}
$returnArr = array("data"=>$myarray,"ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Area List Founded!");
echo json_encode($returnArr);
?>