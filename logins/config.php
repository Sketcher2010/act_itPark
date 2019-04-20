<?php
session_start();

$title = "Мой сайт - лучший!!";

function visits() {
    if($_SESSION["isAuth"]) {
        $_SESSION["visits"] = $_SESSION["visits"] + 1;
    }
}
