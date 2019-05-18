<?php

$user = "postgres";
$pass = "Paradise153";


$dbh = new PDO('pgsql:host=localhost;port=5432;dbname=test', $user, $pass);
