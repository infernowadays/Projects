<?php

	$to = "GainBrainObtain WebStudio";
	$subject = "Ordering information for the service";
	$name = "User Name: $_POST[user_name]\n";
	$mail = "Email: $_POST[user_email]\n";
	$number = "Mobile Phone: $_POST[user_number]\n";
	$product = "Product Information: $_POST[inf]\n";
	$type= "Type Of The Job: $_POST[user_job]\n";
	$data = "End Data: $_POST[time]\n";

	$allData = $name . $mail . $number . $product . $type . $data;
	$result = mail($to, $subject, $allData);

	if ($result) {
		echo "<p>Success</p>";
	}
	else {
		echo "<p>Not Success</p>";
	}

?>