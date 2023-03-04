<?php

class User{
    public $name;
    public $login;
    public $password;

    public function __construct($name, $login, $password){
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
        echo "object {$this->name} created!<hr>";
    }

    public function __destruct(){
        echo "object {$this->name}  deleted!<hr>";
    }

    public function showInfo(){
        echo $this->name."|".$this->login."|".$this->password."<hr>";
    }
}


$yurok = new User('Yuriy', 'Splate', 'rfvTGB123');
$yurok->showInfo();
unset($yurok);

