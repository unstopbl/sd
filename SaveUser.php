<?php

include "DB.php";

if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '') {
        unset($login);
    }
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password == '') {
        unset($password);
    }
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if ($email == '') {
        unset($email);
    }
}

if (empty($login) or empty($password)) {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

$stmt = $dbh->prepare("INSERT INTO profile (login, password, email) VALUES (':log', ':pass', ':email')");
$stmt->bindParam(':log', $login);
$stmt->bindParam(':pass', $password);
$stmt->bindParam(':email', $email);
$stmt->execute();
var_dump($dbh->errorInfo());


$sth = null;


