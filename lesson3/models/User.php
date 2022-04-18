<?php

namespace app\models;


class User extends Model
{
    public $id;
    public $name;
    public $surname;
    public $gender;
    public $login;
    public $password;


    public function __construct($login = null, $pass = null)
    {
        $this->login = $login;
        $this->password = $pass;
    }


    protected function getTableName(): string
    {
        return 'users';
    }
}