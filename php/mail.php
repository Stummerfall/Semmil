<?php 
$recepient = "semen.milokhin@yandex.ru";
$additionalRecepient = "milokhin.semen.1999@gmail.com";
$sitename = "semmil.site";

$name = trim($_POST['name']);
$email = trim($_POST['email']);

$dynamics = trim($_POST['isDynamics']);
$type = trim($_POST['widtype']);
$pages = trim($_POST['pages-num']);
$breakpoints = trim($_POST['breakpoints-num']);
$total = trim($_POST['total']);
$deadline = trim($_POST['deadline']);
$link = trim($_POST['link']);
$comment = trim($_POST['comment']);

$message = "Имя: $name \nЕмейл: $email \n-------------------------------------------\nДинамика: $dynamics \nТип верстки: $type \nКоличество страниц: $pages \nКоличество брейкпоинтов: $breakpoints \nПримерная сумма: $total рублей \nДедлайн: $deadline \nСсылка на макеты: $link \nКомментарий: $comment ";
$pagetitle = "Новая заявка с сайта \"$sitename\" от $name";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\nFrom: $recepient");
mail($additionalRecepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\nFrom: $additionalRecepient");