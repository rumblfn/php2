<?php

namespace app\controllers;

use app\engine\App;
use app\models\entities\User;

class AuthController extends Controller
{
    protected function actionIndex()
    {
        $this->render('auth/index', [
            'userName' => App::call()->userRepository->getName(),
            'isAuth' => App::call()->userRepository->isAuth()
        ]);
    }

    public function actionRegistration()
    {
        $this->render('auth/registration');
    }

    public function actionRegister()
    {
        $login = App::call()->request->getParams()['login'];
        $pass = App::call()->request->getParams()['pass'];
        $user = new User($login, $pass);
        App::call()->userRepository->insert($user);
        header('Location: /auth');
        die();
    }

    public function actionLogin()
    {
        $login = App::call()->request->getParams()['login'];
        $pass = App::call()->request->getParams()['pass'];
        if (App::call()->userRepository->Auth($login, $pass)) {
            header('Location: /');
            die();
        }
        die("не верный логин или пароль");
    }

    public function actionLogout()
    {
        App::call()->session->regenerate();
        App::call()->session->destroy();
        header('Location: /');
        die();
    }
}