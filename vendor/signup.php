<?php
    session_start();
    require_once 'connect.php';
    
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass_accept = $_POST['pass_accept'];



    if($pass === $pass_accept){
        //accepted
        print_r($_POST['login']);
        print_r($_POST['email']);

        $pass = md5($pass);
        $query = "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$pass');";
        mysqli_query($connect, $query);
        
        $_SESSION['message'] = 'Вы успешно зарегистрировались!';
        header('Location: ../index.php');
    }   else{
        //error
        $_SESSION['message'] = 'Пароли не совпадают!';
        header('Location: ../registration.php');
    }

?>