<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Загрузка файла на сервер</title>
</head>
 <body>
  <div>
   <?php
/*
ЗАДАНИЕ
- Проверьте, отправлялся ли файл на сервер
- В случае, если файл был отправлен, выведите: имя файла, размер, имя временного файла, тип, код ошибки
- Если загружен файл типа "image/jpeg", то с помощью функции move_uploaded_file() переместите его в каталог upload. В качестве имени файла используйте его MD5-хеш.
*/
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "Имя файла: ", $_FILES['fupload']['name'], "<br />";
            echo "Размер: ", $_FILES['fupload']['size'], "<br />";
            echo "Имя врем. файла: ", $_FILES['fupload']['tmp_name'], "<br />";
            echo "Тип: ", $_FILES['fupload']['type'], "<br />";
            echo "Код ошибки: ", $_FILES['fupload']['error'], "<br />";
            if ($_FILES['fupload']['type'] == "image/jpeg"){
                $destiation_dir = dirname(__FILE__) ."/upload/".$_FILES['fupload']['name']; // Директория для размещения файла
                move_uploaded_file($_FILES['fupload']['tmp_name'], $destiation_dir );
            ?>    
            <img src="/lab5/upload/<?= $_FILES['fupload']['name'] ?>"></img>
            <?php }
        }
   ?>

  </div>
  <form enctype="multipart/form-data"
        action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <p>
      <input type="hidden" name="MAX_FILE_SIZE" value="1024000">
      <input type="file"   name="fupload"><br>
      <button type="submit">Загрузить</button>
    </p>
   </form>
 </body>
</html>