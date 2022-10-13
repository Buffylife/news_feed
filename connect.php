<?php 
$server = 'localhost';
$user = 'root'; 
$password = 'root'; 
$db = 'news'; 
 
$db_connect = mysqli_connect($server, $user, $password, $db);

if (!$db_connect) {
    die("Не удается подключиться к серверу базы данных!"); 
    exit;
}
?>

