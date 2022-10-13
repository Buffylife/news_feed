<!DOCTYPE HTML>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Главная</title>
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/style.css">
<?php
require 'connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM `news` WHERE id=?"; 

$stmt = $db_connect->prepare($sql); 
$stmt->bind_param("i", $id); 
$stmt->execute(); 
$result = $stmt->get_result(); 
$row = $result->fetch_assoc(); 
?>
</head>
<body>
<div class="newsDetail">
    <div class="newsDetail__title"><?= $row['title'] ?></div>
    <div class="newsDetail__content"><?= $row['content'] ?></div>
    <div class="newsDetail__btn"><a href="news.php" class="newsDetail__link">Все новости >></a></div>
</div>
</body>
</html>
