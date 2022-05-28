<?php

namespace app\models\repositories;

use app\engine\Session;
use app\models\entities\User;
use app\models\Repository;

class UserRepository extends Repository
{
    public function Auth($login, $pass): bool
    {
        $user = $this->getWhere('login', $login);
        if (!$user) {
            return false;
        }
        if (password_verify($pass, $user->password)) {
            Session::getInstance()->set('login', $login);
            return true;
        }
        return false;
    }

    public function isAuth(): bool
    {
        return Session::getInstance()->get('login') !== null;
    }

    public function getName()
    {
        return Session::getInstance()->get('login');
    }

    public function getTableName(): string
    {
        return 'users';
    }

    protected function getEntityClass(): string
    {
        return User::class;
    }
}