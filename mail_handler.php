<?php 
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$to = 'dhayaneshwar2003@gmail.com';
		$subject = 'Form Submission';
		$message = "Name : ".$name."\n". "E-mail : ".$email."\n". "Message : "."\n\n" .$message;
		$headers = "From : ".$email;

		if (mail($to, $subject, $message, $headers)) {
			echo "<h1>Message sent successfully!! Thank you"." ".$name.", We will contact you shortly.</h1>" ;
		}
		else{
			echo "Something went wrong!";
		}
	}

 ?>