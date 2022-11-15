<?
$host = 'localhost';
$user = 'yourname';
$password = 'pass';
$database = 'dbname';

$connect = mysqli_connect($host, $user, $password, $database);

if(!$connect){
    die('Ошибка при подключении к базе данных!');
}
?>