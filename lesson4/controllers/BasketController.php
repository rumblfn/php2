<?php

namespace app\controllers;

class BasketController
{
    private $action;
    private $defaultAction = 'index';

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

    private function actionIndex()
    {
        $this->render('index');
    }

    public function render($template, $params = [])
    {
        $params = [
            'menu' => $this->renderTemplate('menu', $params),
            'content' => $this->renderTemplate(BASKET_DIR . $template, $params)
        ];
        echo $this->renderTemplate('layouts/basket', $params);
    }
    public function renderTemplate($template, $params = [])
    {
        ob_start();
        extract($params);
        include VIEWS_DIR . $template . '.php';
        return ob_get_clean();
    }
}