<?php

namespace app\controllers;

use app\engine\Request;
use app\engine\Session;
use app\models\repositories\BasketRepository;
use app\models\entities\Basket;

class BasketController extends Controller
{
    public function actionIndex()
    {
        $session_id = Session::getInstance()->getId();
        $basket = (new BasketRepository())->getBasket($session_id);
        $this->render('basket', [
            'basket' => $basket,
        ]);
    }

    public function actionAdd()
    {
        $id = Request::getInstance()->params['id'];
        $session_id = Session::getInstance()->getId();

        $basket = new Basket($session_id, $id);
        (new BasketRepository())->insert($basket);

        $response = [
            'status' => 'ok',
            'count' => (new BasketRepository())->getCountWhere('session_id', $session_id)
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    public function actionRemove()
    {
        $id = Request::getInstance()->params['id'];
        $session_id = Session::getInstance()->getId();

        $basket = (new BasketRepository())->getOne($id);
        $error = 'error';

        if (!$basket) {
            $error = 'basket not exist';
        } else if ($session_id == $basket->session_id) {
            (new BasketRepository())->delete($basket);
            $error = 'ok';
        }

        $response = [
            'status' => $error,
            'count' => (new BasketRepository())->getCountWhere('session_id', $session_id)
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}