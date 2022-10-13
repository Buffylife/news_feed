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
     require_once 'connect.php';
?>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header__title">Новости</div>
        </div>
        <div class="news">
        <?require 'pagination.php';?>    
        </div>
    </div>
</body>
</html>
