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
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="wrapper">
        <form method="post" action="/vendor/signup.php" class="reg-form">
        <h3>Регистрация</h3>
            <input type="text" name="login" id="" placeholder="Введите имя пользователя">
            <input type="email" name="email" id="" placeholder="Ваш email">
            <input type="password" name="pass" id="" placeholder="Введите пароль">
            <input type="password" name="pass_accept" id="" placeholder="Повторите пароль">
                <?
                    if($_SESSION['message']){
                        echo '<p>' .$_SESSION['message']. '</p>';
                    }
                    unset($_SESSION['message']);
                ?>
            <button type="submit" >Зарегистрироваться</button>
            <div class="login-quest">
                У вас уже есть аккаунт - <a href="/index.php">авторизируйтесь!</a>
            </div>
        </form>
    </div>
</body>
</html>