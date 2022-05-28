<?php

namespace app\controllers;

use app\engine\Render;
use app\interfaces\IRender;
use app\models\Review;

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
            'menu' => $this->renderTemplate('menu', $params),
            'content' => $this->renderTemplate($template, $params)
        ];
        echo $this->renderTemplate('layouts/main', $params);
    }
    public function renderTemplate($template, $params = [])
    {
        return $this->render->renderTemplate($template, $params);
    }
}