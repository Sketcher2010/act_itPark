<?php
session_start();

$admin = array(
    "id" => 1,
    "login" => "admin",
    "password" => "pass123",
    "name" => "Viktor"
);

$user = array(
    "id" => 2,
    "login" => "user",
    "password" => "pass123",
    "name" => "Oleg"
);

$users = array($admin, $user);

$login = $_POST["login"];
$pass = $_POST["password"];

foreach ($users as $profile) {
    if($profile["login"] == $login and $profile["password"] == $pass) {
        $_SESSION["isAuth"] = true;
        $_SESSION["user"] = $profile;
        break;
    }
}

if(isset($_SESSION["isAuth"]) and $_SESSION["isAuth"] == true) {
    echo "Успешная авторизация";
} else {
    echo "Не корректный логин или пароль!";
}
