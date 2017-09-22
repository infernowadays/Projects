<?php

  $input7 = "Name: ".$_POST['input7']."\n";
  $input8 = "Phone Number: ".$_POST['input8']."\n";
  $input9 = "Email: ".$_POST['input9']."\n";
  $textarea = "Message: ".$_POST['textarea']."\n";

  $allData = $allData.$input7.$input8.$input9.$textarea."\n\n";

  $subject = "RIVAL";
  $to = "maxim_arslanov@mail.ru, Mail@polishwork.pl, partner.belviz@gmail.com"; // адрес почты получателя
$from = "Mail@polishwork.pl"; // адрес почты отправителя

$message = $allData;

$message="
--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"utf-8\"
Content-Transfer-Encoding: 7bit

$message ";





header("Content-Type: text/html; charset=windows-1251");
$headers = "From: " . $from . "\r\n"; // см. наиболее часто используемые заголовки
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"_1_$boundary\"";

$resault = mail($to, $subject, $message, $headers);
header('Refresh: 1; URL=/index.html#win4');
echo 'Sending data to server...';

?>
