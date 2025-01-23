<?php

try {
  $PDO = new PDO("mysql:host=localhost;dbname=326_php", "root", "root");
} catch (PDOException $e) {
  die($e);
}
