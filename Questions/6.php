<?php

$message1 = "Your OTP is 1234, valid for 5 minutes";
$message2 = "You OTP for account verification for +917878767656 is 2345";
$message3 = "3456 is your OTP for 7878767656";
$message4 = "here is your OTP 4674 for your account linked with 7878767656";

	
echo get_otp($message1);
echo get_otp($message2);
echo get_otp($message3);
echo get_otp($message4);


function get_otp($string){
	//write your logic and return the otp from the string
}

?>