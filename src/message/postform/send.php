    <?php
/* Здесь проверяется существование переменных */
if (isset($_POST['myphone'])) {$myphone = $_POST['myphone'];}

 
/* Сюда впишите свою эл. почту */
$myaddres  = "m6132@yandex .ru"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ обратного звонка по пенсии!\nТелефон: $myphone";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заявка'; //сабж
$email='mail@pfr.nedicom.ru'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо! Письмо отправлено юристу! Скоро он перезвонит! </title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("https://pfr.nedicom.ru")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1>Спасибо! Телефон отправлен юристам! Скоро они перезвонят!</h1>
</body>
</html>