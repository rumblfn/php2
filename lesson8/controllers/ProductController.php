<?php

namespace app\controllers;
use app\engine\App;

class ProductController extends Controller
{
    protected function actionIndex()
    {
        $this->render('index');
    }
    protected function actionCatalog()
    {
        $page = $_GET['page'] ?? 0;

        $catalog = App::call()->productRepository->getLimit(($page + 1) * 12);
        $this->render('product/catalog',[
            'catalog' => $catalog,
            'page' => ++$page
        ]);
    }
    protected function actionCard()
    {
        $id = App::call()->request->getParams()['id'];
        $product = App::call()->productRepository->getOne($id);

        $this->render('product/card', [
            'product' => $product
        ]);
    }
}