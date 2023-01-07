<?php
	/*
	ЗАДАНИЕ 1
	- Создайте строковую переменную $login и присвойте ей значение 
	    ' User '
	- Создайте строковую переменную $password и присвойте ей значение 
	    'megaP@ssw0rd'
	- Создайте строковую переменную $name и присвойте ей значение 
	    'иван'
	- Создайте строковую переменную $email и присвойте ей значение 
	    'ivanpetrov.ru'
	- Создайте строковую переменную $code и присвойте ей значение 
	    '<?=$login?>'
	*/
	$login = ' User ';
	$password ='megaP@ssw0rd';
	$name = 'иван';
	$email = 'ivan@petrov.ru';
	$code = '<?=$login?>';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Использование функций обработки строк</title>
</head>
<body>

<?php
	/*
	ЗАДАНИЕ 2
	- Используя строковые функции, удалите пробельные символы в начале 
	    и конце переменной $login, а также сделайте все символы 
	    строчными (малыми)
	*/
	strtolower(preg_replace('/\s+/', '', $login)); 
	echo $login,'<br>';
	
	
	/*
	- Проверьте значение переменной $password на сложность: 
	    пароль должен содержать минимум одну заглавную латинскую 
	    букву, одну строчную и одну цифру, а длина должна быть не 
	    меньше 8 символов
	*/
	$strong=0;
	if(preg_match("/([0-9]+)/", $password)){
        $strong++;
    }
    else echo 'Не хватает цифр<br>';
    if(preg_match("/([a-z]+)/", $password)){
        $strong++;
    }
    else
        echo 'Не хватает маленьких букв<br>';
    if(preg_match("/([A-Z]+)/", $password))
    {
        $strong++;
    }
    else echo 'Не хватает больших букв<br>';
    if(preg_match("/\W/", $password)){
        $strong++;
    }
	
	
	/*
	- Используя строковые функции, сделайте первый символ значения 
	    переменной $name прописной (большой)
	*/
	
	
	/**
	 * Функция mb_ucfirst() делает первый символ значения переменной прописной
	 * @param $name{string} передаётся строка
	*/
	echo mb_ucfirst($name),'<br>';
	function mb_ucfirst($string, $enc = 'UTF-8'){
	    return mb_strtoupper(mb_substr($string, 0, 1, $enc), $enc) . mb_substr($string, 1, mb_strlen($string, $enc), $enc);
	}
	
	
	/*
	- Используя функцию фильтрации переменных проверьте корректность 
	    значения $email
	*/
	if(filter_var($email, FILTER_VALIDATE_EMAIL))
	    echo 'E-mail задан корректно<br>';
	else echo 'E-mail задан не корректно<br>';
	
	
	/*
	- Используя строковые функции выведите значение переменной $code в 
	    браузер в том же виде как она задана в коде
	*/
	echo htmlspecialchars($code);
?>
</body>
</html>