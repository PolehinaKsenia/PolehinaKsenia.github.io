    <!-- Область основного контента -->
<?php
    /*
    ЗАДАНИЕ 1
    - Проверьте, была ли корректно отправлена форма
    - Если она была отправлена, отфильтруйте полученные значения
    - В зависимости от оператора производите различные математические действия
    - В случае деления, проверьте, делитель на равенство с нулем (на ноль делить нельзя)
    - Сохраните полученный результат вычисления в переменной
    */
    $result = 0;
    if (empty($_POST['num1']) or empty($_POST['operator']) or empty($_POST['num2']) and (int)$_POST['num2'] != 0 and (int)$_POST['num1'] != 0){
    	$result =  'Текстовые поля не заполнены';
    }
    else{
    	switch($_POST['operator']){
    		case '+': 
    			$result = (int)$_POST['num1'] + (int)$_POST['num2']; 
    			break;
    		case '-': 
    			$result = (int)$_POST['num1'] - (int)$_POST['num2']; 
    			break;
    		case '*': 
    			$result = (int)$_POST['num1'] * (int)$_POST['num2']; 
    			break;
    		case '/':
    			if ((int)$_POST['num2'] == 0){
    				$result = 'Деление на ноль';
    			}else{
    				$result = (int)$_POST['num1'] / (int)$_POST['num2']; 
    			}
    			break;
    		default:
    			$result = 'ERROR';
    	}
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Калькулятор</title>
</head>
<body>

<h1>Калькулятор</h1>

<?php
    /*
    ЗАДАНИЕ 2
    - Если результат существует, выведите его
    */
    if (empty($_POST['num1']) or empty($_POST['operator']) or empty($_POST['num2']) and (int)$_POST['num2'] != 0 and (int)$_POST['num1'] != 0){
    	echo $result . '<br><hr>';
    }else{
    	switch($_POST['operator']){
    		case '+': 
    			echo (int)$_POST['num1'] . " + " . (int)$_POST['num2'] . " = " . $result . "<br><hr>"; 
    			break;
    		case '-': 
    			echo (int)$_POST['num1'] . " - " . (int)$_POST['num2'] . " = " . $result . "<br><hr>"; 
    			break;
    		case '*': 
    			echo (int)$_POST['num1'] . " * " . (int)$_POST['num2'] . " = " . $result . "<br><hr>"; 
    			break;
    		case '/':
    			if ((int)$_POST['num2'] == 0){
    				$result = 'Деление на ноль<br><hr>';
    				echo $result;
    			}else{
    				echo (int)$_POST['num1'] . " / " . (int)$_POST['num2'] . " = " . $result . "<br><hr>"; 
    			}
    			break;
    		default:
    			$result = 'ERORR<br><hr>';
    			echo $result;
    	}
    }
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<p><label for="num1">Число 1</label><br>
<input type="text" name="num1" id="num1" required></p>

<p><label for="operator">Оператор</label><br>
<select name="operator" id="operator">
    <option value="+" selected >+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select></p>

<p><label for="num2">Число 2</label><br>
<input type="text" name="num2" id="num2" required></p>

<button type="submit">Считать!</button>

</form>

</body>
</html>
    <!-- Область основного контента -->