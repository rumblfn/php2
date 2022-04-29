<?php

namespace app\controllers;

use app\engine\Request;
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
        $login = (new Request())->getParams()['login'];
        $pass = (new Request())->getParams()['pass'];
        $user = new User($login, $pass);
        $user->save(true);
        header('Location: /auth');
        die();
    }

    public function actionLogin()
    {
        $login = (new Request())->getParams()['login'];
        $pass = (new Request())->getParams()['pass'];
        if (User::Auth($login, $pass)) {
            header('Location: /');
            die();
        }
        die("не верный логин или пароль");
    }

    public function actionLogout()
    {
        session_regenerate_id();
        session_destroy();
        header('Location: /');
        die();
    }
}