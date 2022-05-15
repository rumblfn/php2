<?php

namespace app\controllers;

use app\engine\App;

class AdminController extends Controller
{
    public function actionIndex()
    {
        if (App::call()->userRepository->isAdmin()) {
            $orders = App::call()->orderRepository->getAll();

            $this->render('admin');
        } else {
            $this->render('accessDenied', [
                'msg' => 'Вы не админ'
            ]);
        }
    }

    public function actionOrders()
    {
        if (App::call()->userRepository->isAdmin()) {
            $orders = App::call()->orderRepository->getAll();

            $this->render('adminOrders', [
                'orders' => $orders,
            ]);
        } else {
            $this->render('accessDenied', [
                'msg' => 'Вы не админ'
            ]);
        }
    }

    public function actionOrder()
    {
        if (App::call()->userRepository->isAdmin()) {
            $order_id = App::call()->request->getParams()['id'];

            $order = App::call()->orderRepository->getOrderById($order_id);
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
                'msg' => 'Вы не админ'
            ]);
        }
    }
}