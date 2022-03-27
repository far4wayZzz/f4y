<?php
session_start();
$title = 'Личный кабинет';
require ('he/heading.php');?>
<h1>Личный кабинет</h1>
<?php



 $user_name = htmlspecialchars(trim($_POST['name'])); // имя пользователя
$user_email = htmlspecialchars(trim($_POST['email'])); // почта пользователя
$user_pseriya = htmlspecialchars(trim($_POST['seriya'])); // серия паспорта
$user_pnumber = htmlspecialchars(trim($_POST['nomer'])); // номер паспорта
$user_pass = htmlspecialchars(trim($_POST['pass'])); // пароль

$_SESSION['user_name'] = $user_name;
$_SESSION['user_email'] = $user_email;
$_SESSION['user_pseriya'] = $user_pseriya;
$_SESSION['user_pnumber'] = $user_pnumber;
$_SESSION['user_pass'] = $user_pass;


$login = ['user_name'=>$_SESSION['user_name'],
    'user_email'=>$_SESSION['user_email'],
    'user_pseriya'=>$_SESSION['user_pseriya'],
    'user_pnumber'=>$_SESSION['user_pnumber'],
    'user_pass'=>$_SESSION['user_pass']];

if   (strlen((trim($_SESSION['user_name'])) == ""))
    echo 'Введите корректное имя ';

?>
<br>
<?if   ((trim($_SESSION['user_email'])) == "") {
    echo 'Введите корректный Е-mail ';
}//else setcookie('email',$_SESSION['user_email'], time()+5);
?><br>
<?if   ((trim($_SESSION['user_pseriya'])) == "") {
    echo 'Введите корректную серию паспорта ';
}?> <br>
<?php
if   ((trim($_SESSION['user_pnumber'])) == "") {
    echo 'Введите корректный номер паспорта ';
}?><br>
<?php
if   ((trim($_SESSION['user_pass'])) == "") {
    echo 'Введите корректный пароль ';}
else


$_COOKIE = $login;
print_r($_COOKIE);
?>
<?echo 'Вас зовут: '.$_SESSION['user_name'];?> <br>
<?echo 'Ваш E-mail: '.$_SESSION['user_email'];?><br>
<?echo 'Ваша серия Паспорта: '.$_SESSION['user_pseriya'];?><br>
<?echo 'Ваш номер паспорта: '.$_SESSION['user_pnumber'];?><br>
<?echo 'Ваш пароль: я никому не скажу))';?><br>
<?php
/*$message = ($_COOKE);
$to = 'far4waytech@yandex.ru';
$sub = "sinergiya sait proveryaut!!!";
$sub = "=?utf-8?B?".base64_encode($sub)."?=";
$from = 'far4wayzzz@yandex.ru';
$headers = "from: $from\r\nReply-to: $from\r\nContent-tipe: text/plain; charets=utf8\r\n ";

//mail($to, $sub, $message, $from, $headers );

*/require ('he/ending.php');