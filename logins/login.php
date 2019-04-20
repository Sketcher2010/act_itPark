<?php
include("config.php");

if (isset($_POST['login'])) {
    $login = $_POST["login"];
    $password = $_POST["password"];

    if ($login == "123" and $password == "pass") {
        $_SESSION["isAuth"] = true;
        header("Location: /logins");
    }
}

