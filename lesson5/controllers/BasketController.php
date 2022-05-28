<?php

namespace app\controllers;

use app\models\Basket;

class BasketController extends Controller
{
    protected function actionIndex()
    {
        $basket = Basket::getBasket();
        $this->render('basket/index', [
            'basket' => $basket,
        ]);
    }
}