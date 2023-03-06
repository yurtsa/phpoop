<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

$yurok = new User('Yuriy', 'Splate', '12344');
$sanek = new SuperUser('sashka', 'shura', '123', 'admin');
$vasek = new User('Vasya', 'ValayaP', '21231');
$dimon = new User('Dima', 'Dimas', '3213');


//$yurok->showInfo();
//$sanek->showInfo();
//$sanek->getInfo();

//if ($sanek instanceof SuperUser) {
//    $yurok->whoAmI();
//}


echo "<hr>Юзеров: " . User::$userCount;
echo "<hr>Админов: " . SuperUser::$superUserCount;