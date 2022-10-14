<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="wrapper">
        <form class="login-form">
            <p class="two">Ваш логин:</p>
            <div class="user-login"><?= $_SESSION['user']['login'] ?></div>
            <p class="two">Ваша почта:</p>
            <div class="user-email"><?= $_SESSION['user']['email'] ?></div>
            <a href="vendor/logout.php" class="logout">Выход</a>
        </form>
    </div>

</body>
</html>