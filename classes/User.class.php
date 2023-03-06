<?php

class User extends UserAbstract
{
    public static $userCount = 0;

    public function __construct($name, $login, $password)
    {
        try {
            if ($password == 1234)
                throw new Exception('Вылетаем по ошибке');
            ++self::$userCount;
            $this->name = $name;
            $this->login = $login;
            $this->password = $password;

            //echo "object {$this->name} created!<hr>";

        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    public function __destruct()
    {
        // echo "object {$this->name}  deleted!<hr>";
    }

    public function showInfo()
    {
        echo $this->name . "<br>";
        echo $this->login . "<br>";
        echo $this->password . "<br>";
    }

    public function whoAmI()
    {
        echo 'Приндлежит классу:' . __CLASS__ . '<hr>';
    }
}