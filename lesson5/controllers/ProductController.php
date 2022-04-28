<?php

namespace app\controllers;

use app\models\Product;

class ProductController extends Controller
{
    protected function actionIndex()
    {
        $this->render('index');
    }
    protected function actionCatalog()
    {
        $page = $_GET['page'] ?? 0;

        $catalog = Product::getLimit(($page + 1) * 2);
        $this->render('product/catalog',[
            'catalog' => $catalog,
            'page' => ++$page
        ]);
    }
    protected function actionCard()
    {
        $id = $_GET['id'];
        $product = Product::getOne($id);

        $this->render('product/card', [
            'product' => $product
        ]);
    }
}