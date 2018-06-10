<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sub = $_POST['sub'];
$message = $_POST['message'];
if(trim($name)=="Beverly Hills"){
	header('Location: index.php');
	exit;
}

$body = "
<table width='613' border='1'>
   <tr>
    <td width='128'><h4>Name</h4></td>
    <td width='338'> $name </td>
   </tr>
   <tr>
    <td width='128'><h4>Email</h4></td>
    <td width='338'> $email </td>
  </tr>
    <tr>
    <td><h4>Phone</h4></td>
    <td>$phone</td>
  </tr>
   <tr>
    <td><h4>Subject</h4></td>
    <td>$sub</td>
  </tr>
  <tr>
    <td><h4>Message</h4></td>
    <td>$message</td>
  </tr>
 </table>";

$headers =  "From: $email\r\n";
$headers .= "Content-type: text/html;charset=iso-8859-1\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n";
$headers .= "X-Mailer: Just My Server\r\n";
//$formcontent=" From: $name \n Email: $email \n Age: $age \n Location: $location" \n Gender: $gender" \n Subject: $sub"  \n Message: $message";
$recipient = "mjzk5565@gmail.com"; 
$subject = "Someone tried to contact you";
$mailheader = "From: $email \r\n";
mail($recipient,$subject,$body,$headers) or die("Error!");

//for sending sms

// Account details
	/*$apiKey = urlencode('ShPqnTgeJ64-q1zcpmTvdRYaWE0ZI3J24yo6d3RDPs');
	
	// Authorisation details.
	$username = "srikanta.mondol@gmail.com";
	$hash = "86260b98fcb1c341bb1866ba435b3af9f9d7fba5e560bcc57922a0c09690237a";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "9989635555,9246599936"; // A single number or a comma-seperated list of numbers
	$message = $name."booked Appointment on ".$date." -Ph:".$phone;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);*/
	
	
	

	// Authorisation details.
	$username = "humera@flairinfosystems.com";
	$hash = "8f16eedc726c052ba999cfce0ae2e23d5c2d9351567773ba57a77f8f2c5f2938";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "9246599936"; // A single number or a comma-seperated list of numbers
	$message = $name." tried to contact you -Ph:".$phone;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);

	 
	
	
//echo $result;

header('Location: index.php');
?>
