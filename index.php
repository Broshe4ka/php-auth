<?
session_start()
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/main.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="wrapper">
        <form method="post" action="/vendor/signin.php" class="login-form">
            <h3>Вход</h3>
            <input type="text" name="login" placeholder="Введите имя пользователя">
            <input type="password" name="pass" placeholder="Введите пароль">
            <button type="submit" class="login-form__btn">Войти</button>
                <?
                    if($_SESSION['message']){
                        echo '<p>' .$_SESSION['message']. '</p>';
                    }
                    unset($_SESSION['message']);
                ?>
            <div class="login-quest">
                У вас нет аккаунта - <a href="/registration.php">зарегистрируйтесь!</a>
            </div>
        </form>
    </div>
</body>
</html>