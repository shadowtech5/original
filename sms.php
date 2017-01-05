<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once 'Twilio/autoload.php'; // Loads the library
use Twilio\Rest\Client;

function send_sms($phone_number, $sms_content)
{
	if("bookmyanchors.com" == (string)$_SERVER['HTTP_HOST'])
	{
		$sid = "AC5f96c365d60934fa419272965ed35485";
		$token = "ee2049992eae3823b1b5d7bce797fe78";
		$from = "+19402027513";
	}
	else
	{
		$sid = "ACaa1150ea53486583cffd7def125a3280";
		$token = "2ef8bf6f44c306e598d3f8ac2dfd1d8b";
		$from = "+15005550006";
	}

	$client = new Client($sid, $token);

	$message = $client->messages->create(
	  $phone_number, // Text this number
	  array(
	    'from' => $from,
	    'body' => $sms_content
	  )
	);
	if($message)
	{
		echo "sms send successfully";
	}
}
send_sms("+918281424452", "hai");
?>