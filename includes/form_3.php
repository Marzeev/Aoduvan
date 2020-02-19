<?php	
	if(empty($_POST['name_3']) && strlen($_POST['name_3']) == 0 || empty($_POST['email_3']) && strlen($_POST['email_3']) == 0 || empty($_POST['phone_3']) && strlen($_POST['phone_3']) == 0 || empty($_POST['date_3']) && strlen($_POST['date_3']) == 0)
	{
		return false;
	}
	
	$name_3 = $_POST['name_3'];
	$email_3 = $_POST['email_3'];
	$phone_3 = $_POST['phone_3'];
	$date_3 = $_POST['date_3'];
	$select_2326 = $_POST['select_2326'];
	$согласие_на_обработку_персональных_данных_46806 = $_POST['согласие_на_обработку_персональных_данных_46806'];
	
	$to = 'rest@aoduvan.com, marzeev@me.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Заказ столика в ресторане AODUVAN";
	$email_body = "Заказ столика в ресторане AODUVAN \n\n".
				  "Name_3: $name_3 \nEmail_3: $email_3 \nPhone_3: $phone_3 \nDate_3: $date_3 \nSelect_2326: $select_2326 \nСогласие_На_Обработку_Персональных_Данных_46806: $согласие_на_обработку_персональных_данных_46806 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: rest@aoduvan.com\n";
	$headers .= "Reply-To: $email_3";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>