<?php 
$name = $_POST[‘q_name'];
$phone = $_POST[‘q_phone'];
$email = $_POST[‘q_email'];
 
$to = 'jaser1992@gmail.com';
$subject = '';
$message = '';
$message .= 'Name: ' . $name . "\r\n";
$message .= 'Email: ' . $email . "\r\n";
$message .= 'Phone: ' . $phone . "\r\n";
$headers = 'From: ' . $email . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail. ?>
	<?php
	
}else{
echo '<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		Insert correct informations.
	</div>';
}
?>