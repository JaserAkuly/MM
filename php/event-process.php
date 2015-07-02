<?php 
$name = $_POST['e_name'];
$email = $_POST['e_email'];
$phone = $_POST[‘e_phone’];
$eventname = $_POST[‘e_eventname’];
$date = $_POST[‘e_date’];
$time = $_POST['e_time'];
$msg = $_POST[‘e_description’];
 
$to = 'jaser1992@gmail.com';
$subject = '';
$message = '';
$message .= 'Name: ' . $name . "\r\n";
$message .= 'Email: ' . $email . "\r\n";
$message .= ‘Phone: ' . $phone . "\r\n";
$message .= ‘Event Name: ' . $eventname . "\r\n";
$message .= ‘Date: ' . $date . "\r\n";
$message .= ‘Time: ' . $time . "\r\n";
$message .= ‘Description: ' . $msg . "\r\n";
$headers = 'From: ' . $email . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail. ?>

	<script>
		$('#event_modal').modal('hide');
	</script>


<?php

}else{
echo '<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		Insert correct informations.
	</div>';
}
?>