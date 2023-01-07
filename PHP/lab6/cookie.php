<?php
/*
ЗАДАНИЕ 1
- Инициализируйте переменную для подсчета количества посещений
- Если соответствующие данные передавались через куки
  сохраняйте их в эту переменную 
- Нарастите счетчик посещений
- Инициализируйте переменную для хранения значения последнего посещения страницы
- Если соответствующие данные передавались из куки, отфильтруйте их и сохраните в эту переменную.
  Для фильтрации используйте функции trim(), htmlspecialchars()
- С помощью функции setcookie() установите соответствующие куки.  Задайте время хранения куки 1 сутки. 
  Для задания времени последнего посещения страницы используйте функцию date()
*/
    
    if (!isset($_COOKIE['count']))
        {
 
            $count = 1;
            setcookie("count", $count);
        }
    else
        {
            $count = ++$_COOKIE['count'];
            setcookie("count", $count);
        } 
 
    if (!isset($_COOKIE['count'])){
        $time = date("d/m/Y H:i:s");
        setcookie("time", $time);
    }

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Последний визит</title>
</head>
<body>

<h1>Последний визит</h1>

<?php
/*
ЗАДАНИЕ 2
- Выводите информацию о количестве посещений и дате последнего посещения
*/
    if($count>=2){
        echo '<h2>Вы уже здесь ', $_COOKIE['count'], ' раз</h2>'; 
        echo '<br>'; 
        echo "Последнее посещение: ", $_COOKIE['time'];
    }
    else {
        echo '<h1>Добро пожаловать!</a></h1>';
    }
?>

</body>
</html>