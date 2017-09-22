<?php

$count = count($_POST['visaStart4']);


$rusName = "User Name(rus): ".$_POST[rusName4]."\n";
  	$enName = "User Name(en): ".$_POST[enName4]."\n";
  	$anotherSecondName = "User Previous Name: ".$_POST[anotherSecondName4]."\n";
  	$birth = "User Birthday: ".$_POST[birth4]."\n";
  	$maritalism = "User Maritalism: ".$_POST[maritalism4]."\n";
  	$area1 = "User Place Of Birth: ".$_POST[area_41]."\n";
  	$passport = "User Passport: ".$_POST[passport4]."\n";
  	$getPassport = "User Place To Get Passport: ".$_POST[getPassport4]."\n";
  	$firstPassportDate = "User's Getting Passport Date: ".$_POST[firstDate4]."\n";
  	$secondPassportDate = "User's Passport Max Date: ".$_POST[secondDate4]."\n";
  	$area2 = "User Registration: ".$_POST[area_42]."\n";
  	$index = "User Post Index: ".$_POST[index4]."\n";
  	$email = "User Email: ".$_POST[email4]."\n";
  	$number = "User Phone Number: ".$_POST[number4]."\n";
  	$area3 = "User Job Place: ".$_POST[area_43]."\n\n";



  	 for($i=0;$i<$count;$i++) {
  		$visaStart = "User's Visa Start: ".$_POST[visaStart4][$i]."\n";
  		$visaEnd = "User's Visa End: ".$_POST[visaEnd4][$i]."\n";
  		$visa .= $visaStart.$visaEnd."\n";
  	 }

  	$backEmail = "User Back Email: ".$_POST[backEmail4]."\n";
  	$backNumber = "User Back Number: ".$_POST[backNumber4]."\n";


  $allData = $rusName.$enName.$anotherSecondName.$birth.$maritalism.$area1.$passport.$getPassport.$firstPassportDate.$secondPassportDate.$area2.$index.$email.$number.$area3.$visa.$backEmail.$backNumber."\n\n";


  $subject = "Сompletion of the form";
  $to = "maximus1998g@mail.ru, maxim_arslanov@mail.ru, partner.belviz@gmail.com"; // адрес почты получателя
  $from = "maximus1998g@mail.ru"; // адрес почты отправителя

 $message = $allData;



if($_FILES['4__file']['size'] > 0) {

  $output = '<h1>Спасибо! Ваш файл получен.</h1>';

  $attachment = chunk_split(base64_encode(file_get_contents($_FILES['4__file']['tmp_name'])));
  $filename = $_FILES['4__file']['name'];
  $filetype = $_FILES['4__file']['type'];

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