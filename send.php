<?php
$to      = 'tvoqtemail@domein.com';
$tekst   = 'Име: ' . "$ime \n" .
	   'Професия: ' . "$i_am \n" .
	   'Държава: ' . "$country \n" . 
	   'Град: ' . "$city \n" .
	   'Област / Община: ' . "$e_mail \n" .
	   'Пощ. код: ' . "$postalcode \n" .
	   'Улица: ' . "$street \n" .
	   'Фирма: ' . "$company \n" .
	   'Телефон: ' . "$phone \n" .
	   'E-mail: ' . "$email \n" .
	   'Загравие на съобщението: ' . "$subject \n" .
	   'Съобщение: ' . "$text \n" ;
		

mail($to, $ime, $tekst, 'tvoqtemail@domein.com');
echo("Вашето съобщение е изпратено успешно. Благодарим Ви!");
?>