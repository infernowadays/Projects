<?php
  $count = count($_POST['1_FirstName']);
  $subject = "Buisness visa";
  $to = "maximus1998g@mail.ru, maxim_arslanov@mail.ru, Mail@polishwork.pl, partner.belviz@gmail.com"; // адрес почты получателя
  $from = "Mail@polishwork.pl"; // адрес почты отправителя
  

 for($i=0;$i<$count;$i++) {
	$name1 = "User Name Имя: ".$_POST['1_FirstName'][$i]."\n";
	$name2 = "User Familia: ".$_POST['1_SecondName'][$i]."\n";
	$passport = "Passport: ".$_POST['1_Passport'][$i]."\n";
	$passport = "Passport: ".$_POST['1_Passport'][$i]."\n";
	$firm = "Firm: ".$_POST['1_textarea'][$i]."\n";
	$director = "Director: ".$_POST['1_FIO'][$i]."\n";
	$profession = "Profession: ".$_POST['1_Profession'][$i]."\n";
    $birn = "Birn: ".$_POST['1_calendar1'][$i]."\n";
    $visa = "Open visa: ".$_POST['1_calendar2'][$i]."\n";
    $email = "Email: ".$_POST['1_email'][$i]."\n";

	$message .= $name1.$name2.$birn.$passport.$visa.$firm.$director.$profession.$email."\n\n";
	

	
	if($_FILES['FileFirstFrom']['size'][$i] > 0) {

  $attachment[$i] = chunk_split(base64_encode(file_get_contents($_FILES['FileFirstFrom']['tmp_name'][$i])));
  $filename[$i] = $_FILES['FileFirstFrom']['name'][$i];
  $filetype[$i] = $_FILES['FileFirstFrom']['type'][$i];

  $boundary[$i] = md5(date('r', time())); // рандомное число
  
  $message ="
--_1_$boundary[$i]
Content-Type: multipart/alternative; boundary=\"_2_$boundary[$i]\"

--_2_$boundary[$i]
Content-Type: text/plain; charset=\"utf-8\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary[$i]--
--_1_$boundary[$i]
Content-Type: \"$filetype[$i]\"; name=\"$filename[$i]\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment // содержимое является вложенным

$attachment[$i]
--_1_$boundary[$i]--";

	$headers;
	$headers = "From: " . $from . "\r\n"; // см. наиболее часто используемые заголовки
	$headers .= "Reply-To: " . $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: multipart/mixed; boundary=\"_1_$boundary[$i]\"";
}


$resault = mail($to, $subject, $message, $headers);
unset($message);
unset($headers);
 }
 
 
 
 
 echo($_POST['name']);
 
 
 
header('Refresh: 1; URL=/index.html#win4'); 
echo 'Sending data to server...'; 

?>