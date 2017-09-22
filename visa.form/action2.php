<?php

  $count = count($_POST['2_FirstName']);
    $allData;
   for($i=0;$i<$count;$i++) {
  	$name1 = "User Name: ".$_POST['2_FirstName'][$i]."\n";
  	$name2 = "User Familia: ".$_POST['2_SecondName'][$i]."\n";
  	$passport = "Passport: ".$_POST['2_Passport'][$i]."\n";
  	$address = "Address: ".$_POST['2_textarea'][$i]."\n";
      $email = "Email: ".$_POST['2_email'][$i]."\n";
      $birn = "Birn: ".$_POST['2_calendar1'][$i]."\n";
      $visa = "Open visa: ".$_POST['2_calendar2'][$i]."\n";


  	$allData = $allData.$name1.$name2.$passport.$address.$email.$birn.$visa."\n\n";
   }

  $subject = "Work visa";
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