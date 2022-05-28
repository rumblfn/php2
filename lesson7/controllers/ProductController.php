<?php

namespace app\controllers;
use app\engine\Request;
use app\models\repositories\ProductRepository;

class ProductController extends Controller
{
    protected function actionIndex()
    {
        $this->render('index');
    }
    protected function actionCatalog()
    {
        $page = $_GET['page'] ?? 0;

        $catalog = (new ProductRepository())->getLimit(($page + 1) * 2);
        $this->render('product/catalog',[
            'catalog' => $catalog,
            'page' => ++$page
        ]);
    }
    protected function actionCard()
    {
        $id = Request::getInstance()->params['id'];
        $product = (new ProductRepository())->getOne($id);

        $this->render('product/card', [
            'product' => $product
        ]);
    }
}