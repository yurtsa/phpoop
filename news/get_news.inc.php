<?php
$messages=[];
$messages=$news->getNews();

    foreach ($messages as $message=>$value){
        echo $value['title']."<br>";
        echo $value['description']."<br>";
        echo $value['source']."<br>";
        echo date('m/d/Y H:i:s', $value['datetime'])."<hr>";
    }
//проверки
