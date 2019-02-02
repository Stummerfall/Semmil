<?php 
$recepient = "semen.milokhin@yandex.ru";
$additionalRecepient = "milokhin.semen.1999@gmail.com";
$sitename = "semmil.site";

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$mess = trim($_POST['message']);

$message = "Имя: $name \nЕмейл: $email \n-------------------------------------------\nТекст сообщения:\n$mess";
$pagetitle = "Новое письмо с сайта \"$sitename\" от $name";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\nFrom: $recepient");
mail($additionalRecepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\nFrom: $additionalRecepient");