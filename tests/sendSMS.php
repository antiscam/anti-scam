<?php


$from = $_POST['from'];
//$subject = $_POST['subject'];
$to = $_POST['to'];
$carrier = $_POST['carrier'];
$message = stripslashes($_POST['message']);
$formatted_number;

if ((empty($from)) || (empty($to)) || (empty($message))) {
header ("Location: sms_error.php");
}

else if ($carrier == "verizon") {
$formatted_number = $to."@vtext.com";
//mail("$formatted_number", "SMS", "$message"); 
// Currently, the subject is set to "SMS". Feel free to change this.

//header ("Location: sms_success.php");
}

else if ($carrier == "tmobile") {
$formatted_number = $to."@tomomail.net";
//mail("$formatted_number", "SMS", "$message");

//header ("Location: sms_success.php");
}

else if ($carrier == "sprint") {
$formatted_number = $to."@pm.sprint.com";
//mail("$formatted_number", "SMS", "$message");

//header ("Location: sms_success.php");
}

else if ($carrier == "att") {
$formatted_number = $to."@txt.att.net";
//mail("$formatted_number", "SMS", "$message");
//header ("Location: sms_success.php");
}

else if ($carrier == "virgin") {
$formatted_number = $to."@vmobl.com";
//mail("$formatted_number", "SMS", "$message");

//header ("Location: sms_success.php");
}

    require 'class.phpmailer.php';  
    // Instantiate Class  
    $mail = new PHPMailer();  
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPDebug  = 2;          // This will print debugging info  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization  
    $mail->SMTPSecure = "tls";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  
    $mail->Port = 587;  
    $mail->Encoding = '7bit';       // SMS uses 7-bit encoding  
    // Authentication  
    $mail->Username   = "anti0scams@gmail.com"; // Login  
    $mail->Password   = "google001"; // Password  
	$mail->FromName   = "Anti0Scams";
    // Compose  
//    $mail->Subject = $subject;     // Subject (which isn't required)  
    $mail->Body = $message;        // Body of our message  
	
    // Send To  
    $mail->AddAddress($formatted_number); // Where to send it  
	$mail->send();      // Send! 

?>