<!-- Отображаем все ошибки -->
<?php
require_once("./database/connect.php");

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<!-- Вставляем head -->
<?php require_once('./incl/components/head.php'); ?>

<body>
  <!-- Вставляем header -->
  <?php require_once('./incl/components/header.php'); ?>

  <!-- Простейший роутер -->
  <?php
  if (isset($_GET['p'])) {
    // Переменная, которая хранит путь до файла с кодом страницы
    $page = './incl/pages/' . $_GET['p'] . ".php";

    // Проверка на то, существует ли файл страницы
    if (file_exists($page)) {
      // Вставляем код страницы если таковой файл существует
      require_once($page);
    } else {
      // Возвращаем код 404 если таковой файл не найден 
      http_response_code(404);
    }
  } else {
    // Если GET-запрос p пустой, то вставляем код домашней страницы
    require_once('./incl/pages/home.php');
  }
  ?>

  <!-- Вставляем footer -->
  <?php require_once('./incl/components/footer.php'); ?>
</body>

</html>