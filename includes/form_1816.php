<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['phone']) && strlen($_POST['phone']) == 0 || empty($_POST['date']) && strlen($_POST['date']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$date = $_POST['date'];
	$select_2326 = $_POST['select_2326'];
	$i_agree_to_the_use_of_personal_data_necessary_for_processing_a_reservation = $_POST['i_agree_to_the_use_of_personal_data_necessary_for_processing_a_reservation'];
	
	$to = 'rest@aoduvan.com, marzeev@me.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Заказ столика в ресторане AODUVAN";
	$email_body = "Заказ столика в ресторане AODUVAN \n\n".
				  "Name: $name \nEmail: $email \nPhone: $phone \nDate: $date \nSelect_2326: $select_2326 \nI_Agree_To_The_Use_Of_Personal_Data_Necessary_For_Processing_A_Reservation: $i_agree_to_the_use_of_personal_data_necessary_for_processing_a_reservation \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: rest@aoduvan.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>