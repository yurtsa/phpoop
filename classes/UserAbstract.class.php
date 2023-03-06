<?php

abstract class UserAbstract
{
    public $name;
    public $login;
    public $password;

    abstract public function showInfo();

    abstract public function whoAmI();
}
