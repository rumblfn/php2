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
        $this->password = password_hash($pass, PASSWORD_DEFAULT);;
    }

    public static function Auth($login, $pass): bool
    {
        $user = User::getWhere('login', $login);
        if (!$user) {
            return false;
        }
        if (password_verify($pass, $user->password)) {
            $_SESSION['login'] = $login;
            return true;
        }
        return false;
    }

    public function isAuth(): bool
    {
        return isset($_SESSION['login']);
    }

    public function getName()
    {
        return $_SESSION['login'];
    }


    public static function getTableName(): string
    {
        return 'users';
    }
}