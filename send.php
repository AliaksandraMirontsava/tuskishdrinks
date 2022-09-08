<?php

if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['mail'])) {$mail = $_POST['mail'];}
if (isset($_POST['city'])) {$city = $_POST['city'];}
if (isset($_POST['type'])) {$type = $_POST['type'];}
header('Content-type: text/html; charset=utf-8');
 

$address = 'amirontsava@mail.ru';
$sub = "Новая заявка с сайта - Туркиш Дринкс";
$mes = "Автор указал имя: $name \nУказал телефон: $phone \nУказал e-mail: $mail \nУказал город: $city \nУказал примечание: $type";
 
 
$verify = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\n");
if ($verify == 'true')
{
echo "<p>Заявка успешно отправлена.";
}
else 
{
echo "<p>Произошла ошибка, данные не отправлены.";
}
echo "<br><a href=index.html>Вернуться на Главную страницу</a>";
exit;


?>