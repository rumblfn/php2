<?php

namespace app\controllers;

use app\engine\Request;
use app\engine\Session;
use app\models\entities\User;
use app\models\repositories\UserRepository;

class AuthController extends Controller
{
    protected function actionIndex()
    {
        $this->render('auth/index', [
            'userName' => (new UserRepository())->getName(),
            'isAuth' => (new UserRepository())->isAuth()
        ]);
    }

    public function actionRegistration()
    {
        $this->render('auth/registration');
    }

    public function actionRegister()
    {
        $login = Request::getInstance()->params['login'];
        $pass = Request::getInstance()->params['pass'];
        $user = new User($login, $pass);
        (new UserRepository())->insert($user);
        header('Location: /auth');
        die();
    }

    public function actionLogin()
    {
        $login = Request::getInstance()->params['login'];
        $pass = Request::getInstance()->params['pass'];
        if ((new UserRepository())->Auth($login, $pass)) {
            header('Location: /');
            die();
        }
        die("не верный логин или пароль");
    }

    public function actionLogout()
    {
        Session::getInstance()->regenerate();
        Session::getInstance()->destroy();
        header('Location: /');
        die();
    }
}