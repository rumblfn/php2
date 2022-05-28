<?php

namespace app\controllers;

use app\engine\Request;
use app\engine\Session;
use app\models\User;

class AuthController extends Controller
{
    protected function actionIndex()
    {
        $this->render('auth/index', [
            'userName' => User::getName(),
            'isAuth' => User::isAuth()
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
        $user->save(true);
        header('Location: /auth');
        die();
    }

    public function actionLogin()
    {
        $login = Request::getInstance()->params['login'];
        $pass = Request::getInstance()->params['pass'];
        if (User::Auth($login, $pass)) {
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