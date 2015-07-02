<?php 
$name = $_POST['a_name'];
$email = $_POST['a_email'];
$number = $_POST[‘a_number’];
$date = $_POST[‘a_date’];
$msg = $_POST['a_message'];
 
$to = 'jaser1992@gmail.com';
$subject = '';
$message = '';
$message .= 'Name: ' . $name . "\r\n";
$message .= 'Email: ' . $email . "\r\n";
$message .= ‘Number: ' . $number . "\r\n";
$message .= ‘Date: ' . $date . "\r\n";
$message .= 'Message: ' . $msg . "\r\n";
$headers = 'From: ' . $email . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail. ?>

	<script>
		$('#annoucement_modal').modal('hide');
	</script>


<?php

}else{
echo '<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		Insert correct informations.
	</div>';
}
?>