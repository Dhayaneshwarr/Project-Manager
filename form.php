<?php
//if (!isset($_POST['Submit'])) 
	//{
	   //this page should not be accessed directly. Need to submit the form
	   //echo "error; you need to submit the form!";	
	//}
$name = $_POST['name'];
$visitor_email = $_POST['email'];		// <--COLLECT
$message = $_POST['message'];

//VALIDATE
//if (empty($name)||empty($visitor_email)) 
	//{
	   //echo "Name and E-mail are mandatory!";
	   //exit;
	//}
$email_from = 'zhagaramapps@gmail.com';//<==put ur email adress here
$email_subject = "New Form Submission";
$email_body = "You have received a new message from the user $name.\n";
			  "email address: $visitor_email\n";
			  "Here is the message: $message\n";

$to = "zhagaramapps@gmail.com";//<==put ur email adress here
$headers = "From: $email_from \r\n";
$headers .= "Reply to : $visitor_email \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
	
?>		  