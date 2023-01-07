<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $day и присвойте ей произвольное числовое значение
*/
$day = 6;
$file = 'match.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкция switch</title>
</head>
<body>
	<h1>Конструкция switch</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- С помощью конструкции switch выведите фразу 'Это рабочий день', 
	  если значение переменной $day попадает в диапазон чисел от 1 до 5(включительно) 
	- Выведите фразу 'Это выходной день', если значение переменной $day равно числам 6 или 7
	- Выведите фразу 'Неизвестный день', если значение переменной $day не попадает в диапазон 
	  чисел от 1 до 7(включительно) 
	ЗАДАНИЕ 3
	- Выполните задание 2 используя управляющую конструкцию match. 
	  Результат сохраните в файле match.php
	*/
	echo nl2br("ЗАДАНИЕ 2\n\r");
	switch($day){
	    case 1:
	    case 2:
	    case 3:
	    case 4:
	    case 5:
	        echo 'Это рабочий день';
	        break;
	    case 6: 
	    case 7:
	        echo 'Это выходной день';
	        break;
	    default:
	        echo 'Неизвестный день';
	};
	echo nl2br("\n\rЗАДАНИЕ 3.\n\rРезультат в файле match.php\n\r");
	$z3 = match($day){
	    1,2,3,4,5 => 'Это рабочий день',
	    6,7 => 'Это выходной день',
	    default => 'Неизвестный день'
	};
	file_put_contents($file, $z3);
	$f = file_get_contents($file);
	echo $f;
    ?> 
</body>
</html>