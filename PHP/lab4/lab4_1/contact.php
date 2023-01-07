    <!-- Область основного контента -->
    <h3>Адрес</h3>
    <address>123456 Москва, Малый Американский переулок 21</address>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br>
      <input name='subject' type='text' size="50">
      <br>
      <label>Содержание: </label>
      <br>
      <textarea name='body' cols="50" rows="10"></textarea>
      <br>
      <br>
      <input type='submit' value='Отправить'>
    </form>
    <!-- Область основного контента -->
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST['body'] = trim(htmlspecialchars($_POST['body']));
        $_POST['subject'] = trim(htmlspecialchars($_POST['subject']));
        if (mail('polehina.ksusha@yandex.ru', $_POST['subject'], $_POST['body'], "From: admin@center.ogu")){
          echo 'Сообщение успешно отправлено';
        }else{
          echo 'Возникла ошибка';
        }
      }
    ?>