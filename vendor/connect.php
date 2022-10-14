<?
$host = 'localhost';
$user = 'u1809063_admin';
$password = 'Gorelovlol132';
$database = 'u1809063_my-db';

$connect = mysqli_connect($host, $user, $password, $database);

if(!$connect){
    die('Ошибка при подключении к базе данных!');
}
?>