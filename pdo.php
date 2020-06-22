<?php
$dsn = "mysql:host=localhost;port=3306;dbname=mydb";
$user = "user12";
$passwd = "12user";
$pdo = new PDO($dsn, $user, $passwd);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
