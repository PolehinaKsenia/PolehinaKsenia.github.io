<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Пользователи</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require "classes/User.php";
    require "classes/SuperUser.php";
    
    $user1 = new User("A", "log1", "1");
    $user1->showInfo();
    
    $user2 = new User("B", "log2", "2");
    $user2->showInfo();
    
    $user3 = new User("C", "log3", "3");
    $user3->showInfo();
    
    $user = new SuperUser("D","log","4","student");
    $user->showInfo();
?>
</body>
</html>