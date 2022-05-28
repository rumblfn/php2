<?php

namespace app\models;


class User extends DBModel
{
    public $id;
    public $name;
    public $surname;
    public $gender;
    public $login;
    public $password;

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
        $this->password = $pass;
    }


    public static function getTableName(): string
    {
        return 'users';
    }
}