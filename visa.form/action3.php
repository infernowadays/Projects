<?php

  $name1 = "User Name: ".$_POST['3_FirstName']."\n";
  $name2 = "User Familia: ".$_POST['3_SecondName']."\n";
  $passport = "Passport: ".$_POST['3_Passport']."\n";
  $mother = "Mothers FIO: ".$_POST['3_Mothername']."\n";
  $mothergirl = "Mothers mothers Family: ".$_POST['3_motherFirstName']."\n";
  $father = "Fathers FIO: ".$_POST['3_fatherName']."\n";
  $birn = "Birn: ".$_POST['3_calendar']."\n";


  $allData = $allData.$name1.$name2.$birn.$passport.$mother.$mothergirl.$father."\n\n";
  $subject = "Provincial visa";
  $to = "225133@niuitmo.ru"; // адрес почты получателя
  $from = "225133@niuitmo.ru"; // адрес почты отправителя

 $message = $allData;


if($_FILES['fileFF']['size'] > 0) {

  $output = '<h1>Спасибо! Ваш файл получен.</h1>';

  $attachment = chunk_split(base64_encode(file_get_contents($_FILES['fileFF']['tmp_name'])));
  $filename = $_FILES['fileFF']['name'];
  $filetype = $_FILES['fileFF']['type'];

  $boundary = md5(date('r', time())); // рандомное число
}

  $message="
--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"utf-8\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
--_1_$boundary
Content-Type: \"$filetype\"; name=\"$filename\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment // содержимое является вложенным

$attachment
--_1_$boundary--";


  $headers = "From: " . $from . "\r\n"; // см. наиболее часто используемые заголовки
  $headers .= "Reply-To: " . $from . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"_1_$boundary\"";



$resault = mail($to, $subject, $message, $headers);


header('Refresh: 1; URL=/index.html#win4'); 
echo 'Sending data to server...'; 




?>