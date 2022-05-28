<?php

namespace app\controllers;

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
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $user = new User($login, $pass);
        $user->save(true);
        header('Location: /public/?c=auth');
        die();
    }

    public function actionLogin()
    {
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        if (User::Auth($login, $pass)) {
            header('Location: /public/');
            die();
        }
        die("не верный логин или пароль");
    }

    public function actionLogout()
    {
        session_regenerate_id();
        session_destroy();
        header('Location: /public/');
        die();
    }
}