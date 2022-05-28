<?php

namespace app\models\repositories;

use app\engine\App;
use app\models\entities\Order;
use app\models\Repository;

class OrderRepository extends Repository
{
    public function getOrder($session_id)
    {
        $sql = "SELECT * FROM `orders` WHERE `session_id` = :session_id";
        return App::call()->db->queryAll($sql, ['session_id' => $session_id]);
    }

    public function getOrderById($order_id)
    {
        $sql = "SELECT * FROM `orders` WHERE `id` = :order_id";
        return App::call()->db->queryOne($sql, ['order_id' => $order_id]);
    }

    protected function getTableName(): string
    {
        return 'orders';
    }

    protected function getEntityClass(): string
    {
        return Order::class;
    }
}