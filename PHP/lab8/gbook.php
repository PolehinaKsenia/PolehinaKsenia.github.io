<?php
/* ЗАДАНИЕ 1
- Подключитесь к серверу MySQL, выберите базу данных
- Установите кодировку по умолчанию для текущего соединения
- 
- Проверьте, была ли корректным образом отправлена форма
- Если она была отправлена: отфильтруйте полученные данные 
  с помощью функций trim(), htmlspecialchars() и mysqli_real_escape_string(),
  сформируйте SQL-оператор на вставку данных в таблицу msgs и выполните его с помощью функции mysqli_query(). 
  После этого с помощью функции header() выполните перезапрос страницы, 
  чтобы избавиться от информации, переданной через форму
*/

/*
ЗАДАНИЕ 3
- Проверьте, был ли запрос методом GET на удаление записи
- Если он был: отфильтруйте полученные данные,
  сформируйте SQL-оператор на удаление записи и выполните его.
  После этого выполните перезапрос страницы, чтобы избавиться от информации, переданной методом GET
*/
function filter($str, $param='s'){
	if ($param=='s'){
		return trim(htmlspecialchars($str));
	}
	else return abs((int)$str);
}

$host ='localhost';
$db = 'f0720722_login_db';
$user = 'f0720722_login_db';
$pass = '16281107Qq';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass,$opt);
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    	$name = filter($_POST['name']);
    	$email = filter($_POST['email']);
    	$msg = filter($_POST['msg']);
    	$sql = "INSERT INTO msgs (name, email, msg) VALUES(:name, :email, :msg)";
    	$query = $pdo->prepare($sql);
    	$query->execute(['name' => $name,
    	               'email' => $email,
    	               'msg' => $msg,
    	              ]);
    	
    	
        header("Location:{$_SERVER['PHP_SELF']}");
        exit;
    }elseif(($_SERVER['REQUEST_METHOD'] == "GET") AND (isset ($_GET['id'])) ){
    	$ids = filter($_GET['id'], 'i');
    	$delete = "DELETE FROM msgs WHERE `id`= :id";
    	if ($ids>0){
    	    $query = $pdo->prepare($delete);
    	    $query->execute(['id' => $ids]);
    	    
    	}
    
        header("Location:{$_SERVER['PHP_SELF']}");
        exit;
    }
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Гостевая книга</title>
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Ваше имя:<br>
<input type="text" name="name"><br>
Ваш E-mail:<br>
<input type="email" name="email"><br>
Сообщение:<br>
<textarea name="msg" cols="50" rows="5"></textarea><br>
<br>
<input type="submit" value="Добавить!">

</form>

<?php
/*
ЗАДАНИЕ 2
- Сформируйте SQL-оператор на выборку всех данных из таблицы
  msgs в обратном порядке и выполните его. Результат выборки
  сохраните в переменной.
- Закройте соединение с БД
-	С помощью функции mysqli_num_rows() получите количество рядов результата выборки и выведите его на экран
- В цикле функцией mysqli_fetch_assoc() получите очередной ряд результата выборки в виде ассоциативного массива.
  Таким образом, используя этот цикл, выведите на экран все сообщения, а также информацию
  об авторе каждого сообщения. После каджого сообщения сформируйте ссылку для удаления этой
  записи. Информацию об идентификаторе удаляемого сообщения передавайте методом GET.
*/
$query = $pdo->query('SELECT * FROM msgs ORDER BY `id` DESC');
$count = $query->rowCount();

echo "<br><br>\n\nЗаписей в гостевой книге: $count";

while ($row=$query->fetch(PDO::FETCH_OBJ)){
    echo "<hr><p style='margin-left:10px; font-weight:bold'>";
	echo "<a href=mailto:{$row->email}>{$row->name}</a></p>";
	echo "<p style='margin-left:20px'>".nl2br($row->msg)."</p>";
	echo "<div align='right' style='margin-right:50px'><a href=gbook.php?id={$row->id}>Удалить</a></div>";
}
$query=null;
$pdo = null;
?>

</body>
</html>