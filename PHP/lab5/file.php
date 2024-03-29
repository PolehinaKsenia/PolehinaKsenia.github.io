<?php
    /*
    ЗАДАНИЕ 1
    - Установите константу для хранения имени файла
    - Проверьте, отправлялась ли форма и корректно ли отправлены данные из формы
    - В случае, если форма была отправлена, отфильтруйте полученные значения 
      с помощью функций trim(), htmlspecialchars()
    - Сформируйте строку для записи с файл
    - Откройте соединение с файлом и запишите в него сформированную строку
    - Используя функцию header() выполните перезапрос текущей страницы 
      (чтобы избавиться от данных, отправленных методом POST)
    */
    define("FILE_NAME", 'guestBook.txt');
    if ($_SERVER['REQUEST_METHOD'] == 'POST' and !empty($_POST['fname']) and !empty($_POST['lname'])){
            $_POST['fname'] = htmlspecialchars(trim($_POST['fname']));
            $_POST['lname'] = htmlspecialchars(trim($_POST['lname']));
            $str = $_POST['fname']."\t";
            $str .= $_POST['lname']."\n";
            file_put_contents(FILE_NAME, $str, FILE_APPEND);
            header("location:file.php");
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Работа с файлами</title>
</head>
<body>

<h1>Заполните форму</h1>

<form method="post" action="<?=$_SERVER['PHP_SELF']?>">

Имя: <input type="text" name="fname"><br>
Фамилия: <input type="text" name="lname"><br>

<br>

<input type="submit" value="Отправить!">

</form>

<?php
/*
ЗАДАНИЕ 2
- Проверьте, существует ли файл с информацией о пользователях
- Если файл существует, получите все содержимое файла в виде массива строк 
  с помощью функции file()
- В цикле выведите все строки данного файла с порядковым номером строки
- После этого выведите размер файла в байтах.
*/
    if(file_exists(FILE_NAME)){
	    $line = 1;
    	foreach(file(FILE_NAME) as $var){
    		echo "$line. \t $var<br/>";
    		$line++;
    	    }
    echo '<br/>';
	echo "Размер файла: ". filesize(FILE_NAME) ." байт";
    }
?>
</body>
</html>