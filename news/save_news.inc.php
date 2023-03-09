<?php
if (empty($_POST['title']) || empty($_POST['category']) || empty($_POST['description']) || empty($_POST['source']))
    $errMsg = "Заполните все поля";
else {
    $insert = $news->saveNews($_POST['title'], $_POST['category'], $_POST['description'], $_POST['source']);
    if ($insert) {
        header("location: news.php?f=add");
        exit();
    } else {
        $errMsg = "Произошла ошибка добавления в базу";
    }
}