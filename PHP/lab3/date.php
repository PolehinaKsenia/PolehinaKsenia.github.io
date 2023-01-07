<?php
	/*
	ЗАДАНИЕ 1
	- Присвойте переменной $now значение метки времени актуальной даты(сегодня)
	- Присвойте переменной $birthday значение метки времени Вашего дня рождения
	- Создайте переменную $hour
	- С помощью функции getdate() присвойте переменной $hour текущий час
	*/
	date_default_timezone_set('Europe/Moscow');
	$now = time();
	$year =(date('Y') + 1);
	$birthday = mktime(0,0,0,7,11,$year);
	$hour = getdate();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Использование функций даты и времени</title>
</head>
<body>
	<h1>Использование функций даты и времени</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- Используя управляющую конструкцию if – elseif - else присвойте 
	  переменной $welcome значение, изходя из следующих условий
	  если число в переменной $hour попадает в диапазон:
	  * от 0 до 6 - 'Доброй ночи'
	  * от 6 (включительно) до 12 - 'Доброе утро'
	  * от 12 (включительно) до 18 - 'Добрый день'
	  * от 18 (включительно) до 23 - 'Добрый вечер'
	  * Если число в переменной $hour не попадает ни в один из вышеперечисленных
	    диапазонов, то присвойте переменной $welcome значение 'Доброй ночи'
	*/
	if($hour['hours'] >= 0 and $hour['hours'] < 6) $welcome = 'Доброй ночи<br>';
	elseif($hour['hours'] >= 6 and $hour['hours'] < 12) $welcome = 'Доброе утро<br>';
	elseif($hour['hours'] >= 12 and $hour['hours'] < 18) $welcome = 'Добрый день<br>';
	elseif($hour['hours'] >= 18 and $hour['hours'] < 23) $welcome = 'Добрый вечер<br>';
	else $welcome = 'Доброй ночи<br>';
	/*
	- Выведите $welcome на отдельной строке
	*/
	echo $welcome;
	/*
	- Установите локаль ru_RU.UTF-8
	*/
	setlocale(LC_ALL,'ru_RU.UTF-8');
	/*
	- С помощью функции datefmt_format() на отдельной строке выведите 
	  текущую дату, месяц, год, день недели и время,
	  например, "Сегодня 1 сентября 2018 года, суббота 09:30:00"
	*/
    
    $fmt = datefmt_create(
        'ru_RU',
        IntlDateFormatter::FULL,
        IntlDateFormatter::FULL,
        'Europe/Moscow',
        IntlDateFormatter::GREGORIAN
    );
    echo datefmt_format($fmt, $now);
    echo '<br>';
    
	/*
	- На отдельной строке выведите фразу "До моего дня рождения осталось "
	- Выведите количество дней, часов, минут и секунд оставшееся до 
	    Вашего дня рождения
	*/
	echo 'До моего дня рождения осталось ';
	$br=((int)$birthday - (int)$now);
	$sec=$br;
	$min=floor($br/60);
	$chas=floor($br/3600);
	$dney=floor($br/86400);
	echo "$dney дней, $chas часов, $min минут, $sec секунд."
	?>
</body>
</html>