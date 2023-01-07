<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Функции PHP</title>
</head>
<body>
	<h1>Загруженные модули</h1>
<pre>
<?php
$arrext = get_loaded_extensions();

foreach ($arrext as $value){
    echo "<h2>$value</h2>";
    print_r(get_extension_funcs($value));
    echo "<br>";
}
?>
</pre>