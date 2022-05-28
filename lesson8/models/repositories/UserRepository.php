<?php

namespace app\models\repositories;

use app\models\entities\User;
use app\models\Repository;
use app\engine\App;

class UserRepository extends Repository
{
    public function Auth($login, $pass): bool
    {
        $user = $this->getWhere('login', $login);
        if (!$user) {
            return false;
        }
        if (password_verify($pass, $user->password)) {
            App::call()->session->set('login', $login);
            return true;
        }
        return false;
    }

    public function isAuth(): bool
    {
        return App::call()->session->get('login') !== null;
    }

    public function isAdmin(): bool
    {
        return App::call()->session->get('login') == 'admin';
    }

    public function getName()
    {
        return App::call()->session->get('login');
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