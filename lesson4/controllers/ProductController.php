<?php

namespace app\controllers;

use app\models\Product;

class ProductController
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
    private function actionCatalog()
    {
        $page = $_GET['page'] ?? 0;

        $catalog = Product::getAll();
        // $catalog = Product::getLimit(($page + 1) * 2);
        $this->render('product/catalog',[
            'catalog' => $catalog,
            'page' => ++$page
        ]);
    }
    private function actionCard()
    {
        $id = $_GET['id'];
        $product = Product::getOne($id);

        $this->render('product/card', [
            'product' => $product
        ]);
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
        ob_start();
        extract($params);
        include VIEWS_DIR . $template . '.php';
        return ob_get_clean();
    }
}