<?php
spl_autoload_register(function ($class) {
    include $class . '.class.php';
});
$errMsg = "";

if (!empty($_POST)) require_once 'get_news.inc.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Новостная лента</title>
    <meta charset="utf-8"/>
</head>
<body>
<h1>Последние новости</h1>
<?php


?>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    Заголовок новости:<br/>
    <input type="text" name="title"/><br/>
    Выберите категорию:<br/>
    <select name="category">
        <option value="1">Политика</option>
        <option value="2">Культура</option>
        <option value="3">Спорт</option>
    </select>
    <br/>
    Текст новости:<br/>
    <textarea name="description" cols="50" rows="5"></textarea><br/>
    Источник:<br/>
    <input type="text" name="source"/><br/>
    <br/>
    <input type="submit" value="Добавить!"/>
</form>
<hr>
<div>
    <?= $errMsg; ?>
</div>
<?php

$news = new NewsDB();
//var_dump($news->saveNews($_POST['title'], $_POST['category'], $_POST['description'], $_POST['source']));
?>
</body>
</html>