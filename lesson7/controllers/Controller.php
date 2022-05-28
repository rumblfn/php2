<?php

namespace app\controllers;

use app\interfaces\IRender;
use app\models\repositories\BasketRepository;

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
        $params = [
            'menu' => $this->renderTemplate('menu', [
                'count' => (new BasketRepository())->getCountWhere('session_id', session_id())
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