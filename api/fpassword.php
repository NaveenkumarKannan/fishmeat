<?php 
 
 require 'db.php';
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];
if($email == '' )
{
	$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Something Went wrong  try again !");
}
else 
{
	$count = mysqli_query($con,"select * from register where email='".$email."'");
	if($count !=0)
	{

$digits = 4;
$pin =  rand(pow(10, $digits-1), pow(10, $digits)-1);


$message = '
    	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		    <head>
		        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		        <title>Contact Inquiry | SMS FORM</title>
		    </head>
		    <body style="font-family:Arial,\'Helvetica Neue\',Helvetica,sans-serif;box-sizing:border-box;margin:0 auto;line-height:1.4;color:#74787e">
		       <p style="color:red;font-size:18px;"> Your Otp :- '.$pin.'<p>
		    </body>
		</html>
    ';

    $to      = $email;
    //enter your email
    $subject = 'Change Password Otp';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: Fish and Meat Delivery<cscodetechuser@gmail.com>' . "\r\n";

    mail($to, $subject, $message, $headers);
mysqli_query($con,"update register set pin='".$pin."' where email='".$email."'");
$returnArr = array("ResponseCode"=>"200","Result"=>"true","ResponseMsg"=>"Otp Send Successfully Please Check Mail!!!");

	}
	else 
	{
		$returnArr = array("ResponseCode"=>"401","Result"=>"false","ResponseMsg"=>"Email Address Not Found!");
	}
}
echo json_encode($returnArr);
mysqli_close($con);
?> 