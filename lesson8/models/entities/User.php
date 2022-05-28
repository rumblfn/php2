<?php

namespace app\models\entities;


use app\models\Model;

class User extends Model
{
    protected $id;
    protected $name;
    protected $surname;
    protected $gender;
    protected $login;
    protected $password;

    protected $props = [
        'name' => false,
        'surname' => false,
        'gender' => false,
        'login' => false,
        'password' => false,
    ];


    public function __construct($login = null, $pass = null)
    {
        $this->login = $login;
        $this->password = password_hash($pass, PASSWORD_DEFAULT);;
    }
}