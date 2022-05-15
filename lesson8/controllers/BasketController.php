<?php

namespace app\controllers;

use app\engine\App;
use app\models\entities\Basket;
use app\models\entities\Order;
use app\models\entities\OrderItem;

class BasketController extends Controller
{
    public function actionIndex()
    {
        $session_id = App::call()->session->getId();
        $user_login = App::call()->session->get('login');

        if ($user_login) {
            $user = App::call()->userRepository->getWhere('login', $user_login);
            $session_id = $user->id;
        }

        $basket = App::call()->basketRepository->getBasket($session_id);
        $this->render('basket', [
            'basket' => $basket,
        ]);
    }

    public function actionAdd()
    {
        $id = App::call()->request->getParams()['id'];

        $session_id = App::call()->session->getId();

        $user_login = App::call()->session->get('login');

        if ($user_login) {
            $user = App::call()->userRepository->getWhere('login', $user_login);
            $session_id = $user->id;
        }

        $basket = new Basket($session_id, $id);
        App::call()->basketRepository->insert($basket);

        $response = [
            'status' => 'ok',
            'count' => App::call()->basketRepository->getCountWhere('session_id', $session_id)
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    public function actionRemove()
    {
        $id = App::call()->request->getParams()['id'];
        $session_id = App::call()->session->getId();

        $user_login = App::call()->session->get('login');

        if ($user_login) {
            $user = App::call()->userRepository->getWhere('login', $user_login);
            $session_id = $user->id;
        }

        $basket = App::call()->basketRepository->getOne($id);
        $error = 'error';

        if (!$basket) {
            $error = 'basket not exist';
        } else if ($session_id == $basket->session_id) {
            App::call()->basketRepository->delete($basket);
            $error = 'ok';
        }

        $response = [
            'status' => $error,
            'count' => App::call()->basketRepository->getCountWhere('session_id', $session_id)
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    public function actionOrder()
    {
        $session_id = App::call()->session->getId();
        $user_login = App::call()->session->get('login');

        if ($user_login) {
            $user = App::call()->userRepository->getWhere('login', $user_login);
            $session_id = $user->id;
        }

        $basket = App::call()->basketRepository->getBasket($session_id);

        if (count($basket) == 0) {
            $this->render('accessDenied', [
                'msg' => 'ваша корзина пуста',
            ]);
            die();
        }

        $email = App::call()->request->getParams()['email'];
        $telephone = App::call()->request->getParams()['telephone'];
        $address = App::call()->request->getParams()['address'];

        $order = new Order($email, $telephone, $address, $session_id);
        App::call()->orderRepository->insert($order);
        $order_id = App::call()->db->lastInsertId();

        foreach ($basket as $item) {
            $orderItem = new OrderItem($order_id, $item['prod_id']);
            App::call()->orderItemRepository->insert($orderItem);
        }

        App::call()->basketRepository->deleteAll($session_id);

        header("Location: /order");
        die();
    }
}