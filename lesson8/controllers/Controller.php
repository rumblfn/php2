<?php

namespace app\controllers;

use app\engine\App;
use app\interfaces\IRender;

abstract class Controller
{
    private $action;
    private $defaultAction = 'index';
    private $render;

    public function __construct(IRender $render)
    {
        $this->render = $render;
    }

    public function runAction($action)
    {
        $this->action = $action ?: $this->defaultAction;
        $method = 'action' . ucfirst($this->action);
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            die("action not exist");
        }
    }

    public function render($template, $params = [])
    {
        $session_id = App::call()->session->getId();
        $user_login = App::call()->session->get('login');

        if ($user_login) {
            $user = App::call()->userRepository->getWhere('login', $user_login);
            $session_id = $user->id;
        }

        $params = [
            'menu' => $this->renderTemplate('menu', [
                'count' => App::call()->basketRepository->getCountWhere('session_id', $session_id),
                'orderCount' => App::call()->orderRepository->getCountWhere('session_id', $session_id),
                'is_admin' => App::call()->userRepository->isAdmin()
            ]),
            'content' => $this->renderTemplate($template, $params),
            'script' => file_get_contents('../public/js/index.js')
        ];
        echo $this->renderTemplate('layouts/main', $params);
    }
    public function renderTemplate($template, $params = [])
    {
        return $this->render->renderTemplate($template, $params);
    }
}