<?php

// Подключение к БД

$host = "localhost";
$dbname = "326_php";
$username = "root";
$password = "root";

try {
  $PDO = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
  die($e);
}
