<?php

namespace app\controllers;

use app\engine\App;

class OrderController extends Controller
{
    public function actionIndex()
    {
        $session_id = App::call()->session->getId();
        $user_login = App::call()->session->get('login');

        if ($user_login) {
            $user = App::call()->userRepository->getWhere('login', $user_login);
            $session_id = $user->id;
        }

        $orders = App::call()->orderRepository->getOrder($session_id);
        $this->render('order', [
            'orders' => $orders,
        ]);
    }

    public function actionOrder()
    {
        $session_id = App::call()->session->getId();
        $user_login = App::call()->session->get('login');

        if ($user_login) {
            $user = App::call()->userRepository->getWhere('login', $user_login);
            $session_id = $user->id;
        }

        $order_id = App::call()->request->getParams()['id'];

        $order = App::call()->orderRepository->getOne($order_id);

        if ($session_id == $order->session_id) {
            $items_id = App::call()->orderItemRepository->getOrderItems($order_id);
            $items = [];
            foreach ($items_id as $item_id) {
                $items[] = App::call()->productRepository->getOne($item_id['item_id']);
            }

            $this->render('oneOrder', [
                'order' => $order,
                'items' => $items,
            ]);
        } else {
            $this->render('accessDenied', [
                'msg' => 'У вас нет доступа к чужим заказам'
            ]);
        }
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

        $order = App::call()->orderRepository->getOne($id);
        $error = 'error';

        if (!$order) {
            $error = 'basket not exist';
        } else if ($session_id == $order->session_id) {
            App::call()->orderRepository->delete($order);
            $error = 'ok';
        }

        $response = [
            'status' => $error,
            'count' => App::call()->orderRepository->getCountWhere('session_id', $session_id)
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}