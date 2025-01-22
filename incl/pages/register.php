<?php
if (isset($_POST['register'])) {
  $errors = [];

  if (empty($_POST['email'])) {
    $errors["email"] = "Поле email обязательное.";
  } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors["email"] = "Некорректный email.";
  }

  if (empty($_POST['password'])) {
    $errors["password"] = "Поле password обязательное.";
  } else if (strlen($_POST['password']) < 6) {
    $errors["password"] = "Минимальная длинна поля password - 6 символов.";
  } else if (strlen($_POST['password']) > 20) {
    $errors["password"] = "Максимальная длинна поля password - 20 символов.";
  }

  if (empty($_POST['password_confirmation'])) {
    $errors["password_confirmation"] = "Поле password_confirmation обязательное.";
  } else if ($_POST['password_confirmation'] !== $_POST['password']) {
    $errors["password_confirmation"] = "Пароли не совпадают.";
  }

  if (count($errors) <= 0) {
    $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
  }
}
?>

<h1>Register page</h1>

<form method="post">
  <div class="input_container">
    <input type="text" name="email" placeholder="Email">
    <p class="error_text"><?= $errors["email"] ?? '' ?></p>
  </div>
  <div class="input_container">
    <input type="password" name="password" placeholder="Password">
    <p class="error_text"><?= $errors["password"] ?? '' ?></p>
  </div>
  <div class="input_container">
    <input type="password" name="password_confirmation" placeholder="Password again">
    <p class="error_text"><?= $errors["password_confirmation"] ?? '' ?></p>
  </div>
  <button type="submit" name="register">Register</button>
</form>