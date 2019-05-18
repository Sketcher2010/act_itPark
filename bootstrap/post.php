<?php
include "config.php";

$email = $_POST["email"];
$name = $_POST["name"];
$text = $_POST["text"];

$stmt = $dbh->prepare("
INSERT INTO post (name, text, created_at, email) 
VALUES (?, ?, ?, ?)
    ");
$stmt->execute(
    array($name, $text, time(), $email)
);

echo "УСПЕХ!!!";













