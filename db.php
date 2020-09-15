<?php
// define('SET_Fake_val',0);
// $host ='localhost';
// $user = 'root';
// $db = 'fishmeat';
// $password = '';


//    $con = mysqli_connect($host,$user,$password,$db) or die(mysql_error());
    

// 
//define('SET_Fake_val',0);
$servername ='';
$username = '';
$password = '';
$dbname = '';
if($_SERVER['HTTP_HOST']=="localhost" or $_SERVER['HTTP_HOST']=="192.168.29.126")
{	
   $servername ='localhost';
   $username = 'root';
   $password = '';
   $dbname = 'fishmeat';
   //$con = mysqli_connect($servername,$username,$password,$dbname) or die(mysql_error());
}
else
{
	$servername = "localhost";
	$username = "fishmeat_fishmea";
	$password = "fishmeat_fishmeat";
	$dbname = "fishmeat_fishmeat";
}
//$conn = mysqli_connect($servername, $username, $password,$dbname);

DEFINE ('DB_HOST', $servername); //host name depends on server
DEFINE ('DB_USER', $username);
DEFINE ('DB_PASSWORD', $password);
DEFINE ('DB_NAME', $dbname);
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$result_array = array();//"success"=>false,"message"=>"Not Connected. Database Connection Failure");
$result_array["success"]=false;
$result_array["message"]="Message";
if(!$con){
	$result_array["success"]=false;
	$result_array["message"]="Not Connected. Database Connection Failure";
	echo json_encode($result_array);
}/*else{
	$result_array["success"]=true;
	$result_array["message"]="Connected to Database";
	echo json_encode($result_array);
	//echo json_encode(array("success"=>true,"message"=>"Connected to Database"));
}*/ 
?>
