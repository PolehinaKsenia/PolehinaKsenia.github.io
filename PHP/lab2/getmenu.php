<?php
	/*
	ЗАДАНИЕ 1
	- Опишите функцию getMenu()
	- Задайте для функции первый аргумент $menu, в него будет передаваться массив, 
	    содержащий структуру меню
	- Задайте для функции второй аргумент $vertical со значением по умолчанию равным true. 
	    Данный параметр указывает, каким образом будет отрисовано меню - вертикально или 
	    горизонтально
	
	ЗАДАНИЕ 2
	- Откройте файл menu.php
	- Скопируйте код, который создает массив $leftMenu и вставьте скопированный код в данный 
	    документ
	- Скопируйте код, который отрисовывает меню
	- Вставьте скопированный код в тело функции getMenu()
	- Измените код таким образом, чтобы меню отрисовывалась в зависимости от входящих 
	параметров $menu и $vertical
	- Добавьте описание функции getMenu() с помощью стандарта PHPDoc https://ru.wikipedia.org/wiki/PHPDoc
	*/
	/**
	 * Функция getMenu() отрисовывает меню
	 * @param $menu{number} передаётся массив
	 * @param $vertical{string} отрисованное меню будет вертикальным(горизонтальным)
	*/
	function getMenu($menu, $vertical=true){
		if(!$vertical){
		    echo '<ul class="gorizont">';
	        
		}
		else{
		    echo '<ul class="vertical">';
	    }
	    foreach($menu as $value){
		        echo '<li>';
		            echo '<a href="', $value['href'], '">', $value['link'], '</a>'; 
			    echo '</li>';
	        }
	        echo '</ul>';
	    
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Меню</title>
	<style>
	    .vertical, .gorizont{
	        list-style-type: none;
	    }
	    .gorizont li {
	        display: inline;
	        margin-right: 5px;
	    }
	</style>
</head>
<body>
	<h1>Меню</h1>
	<?php
	/*
	ЗАДАНИЕ 3
	- Отрисуйте вертикальное меню вызывая функцию getMenu() с одним параметром
	*/
	/*
	ЗАДАНИЕ 4
	- Отрисуйте горизонтальное меню вызывая функцию getMenu() со вторым параметром равным false
	*/
	$menu = [
    	['link'=>'Домой', 'href'=>'index.php'],
    	['link'=>'О нас', 'href'=>'about.php'],
    	['link'=>'Контакты', 'href'=>'contact.php'],
    	['link'=>'Таблица умножения', 'href'=>'table.php'],
    	['link'=>'Калькулятор', 'href'=>'calc.php'],
    ];
	getMenu($menu);
	getMenu($menu, false);
	?> 
</body>
</html>
