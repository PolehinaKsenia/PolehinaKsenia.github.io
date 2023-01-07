<?php
/*
ЗАДАНИЕ 1
- Создайте константу и присвойте ей значение
*/
define("CON", 5);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<h3>ЗАДАНИЕ 2</h3>
	<?php
	/*
	ЗАДАНИЕ 2
	- Проверьте, существует ли константа, которую Вы хотите использовать
	- Выведите значение созданной константы
	ЗАДАНИЕ 3
	- Используя предопределённые в ядре константы выведите текущую версию PHP
	- Используя магические константы выведите директорию скрипта
	*/
	if (defined("CON")){
	echo nl2br("\n\rконстанта существует\n\r");
	echo defined ("CON");
	};
	?>
	<h3>ЗАДАНИЕ 3</h3>
	<?php 
	echo 'Текущая версия PHP: ', PHP_VERSION;
	echo nl2br("\n\r");
	echo __DIR__;
	?>
</body>
</html>