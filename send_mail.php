<?php
	if(isset($_POST['subscribe']))
	{
		//$to = 'admin@atdsclinic.web44.net';
		$to = 'atd.1382@gmail.com';
		$from = $_POST['email'];
		$subject = 'Regarding Appointment Details';
		$message = 'Your appointment is booked for 3.00pm';
		mail($to,$subject,$message,"From:".$from);
		echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
	}
?>
