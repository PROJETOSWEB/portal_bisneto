<?php

/* Candidate Contact Form */

// Email To 
$email_to = "karolfurletti@gmail.com";


// Default Subject
$email_subject = 'Contato do site Arthur Bisneto';
	
	
// Success Message
$success_message = "Obrigado pelo contato!";



	
/* Error Handling */

$error = false;
$error_message = '';

	

	
/* Email Field */
if(isset($_POST['contact-email']) && !empty($_POST['contact-email'])){
	
	$email = $_POST['contact-email'];
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	
		$error = true;
		$error_message .= 'Email is not valid<br>';
		
	}
	
}else{
	
	$error = true;
	$error_message .= 'Please fill in the email address field<br>';
	
}




/* First Name */
if(isset($_POST['contact-firstname']) && !empty($_POST['contact-firstname'])){
	
	$first_name = $_POST['contact-firstname'];
	
}else{

	$error = true;
	$error_message .= 'Please fill in the first name field<br>';
	
}




/* Last Name */
if(isset($_POST['contact-lastname']) && !empty($_POST['contact-lastname'])){
	
	$last_name = $_POST['contact-lastname'];
	
}else{

	$error = true;
	$error_message .= 'Please fill in the last name field<br>';
	
}



/* Phone */
if(isset($_POST['contact-phone']) && !empty($_POST['contact-phone'])){
	
	$phone = $_POST['contact-phone'];
	
}


/* Subject */
if(isset($_POST['contact-subject']) && !empty($_POST['contact-subject'])){
	
	$subject = $_POST['contact-subject'];
	
}



/* Message */
if(isset($_POST['contact-message']) && !empty($_POST['contact-message'])){
	
	$message = $_POST['contact-message'];
	
}




/* Error Handle */
if($error == true){
	
	echo '<p class="error">'.$error_message.'</p>';

}else{
	
	
	/* Prepare Mail */
	
	$headers = 	'From: '. $email . "\r\n" .
				'Reply-To: '. $email . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
	
	
	
	/* Message */
	$email_message = 	"First Name: " . $first_name . "\r\n" .
						"Last Name: " . $last_name . "\r\n" .
						"Email: " . $email . "\r\n" ;
						
	
	
		
	if(isset($phone))
		$email_message .= "Phone: " . $phone . "\r\n";
		
	if(isset($subject))
		$email_subject = $subject;
		
	if(isset($message))
		$email_message .= "Comments: " . $message . "\r\n";
	
	
	/* Send Email */
	mail($email_to, $email_subject, $email_message, $headers);
	
	
	
	/* Success Message */
	echo '<p class="success">'.$success_message.'</p>';


}




?>