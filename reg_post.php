<?php

$mysql = new mysqli("localhost","root", "","reddit");
$mysql->query("SET NAMES 'utf8'");

$uniq_id = uniqid(" ");

$username = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];



if(isset($_POST['form_auth_submit'])) {
    $mysql->query("INSERT INTO `account` (`id`,`name`, `surname`, `patronymic`, `login`, `email`, `password`) VALUES ('$uniq_id', '$username', '$surname', '$patronymic', '$login', '$email', '$pass')");
}

$mysql->close();


?>