<?php

namespace app\models\repositories;

use app\engine\App;
use app\models\entities\OrderItem;
use app\models\Repository;

class OrderItemRepository extends Repository
{
    public function getOrderItems($order_id)
    {
        $sql = "SELECT * FROM `order_items` WHERE `order_id` = :order_id";
        return App::call()->db->queryAll($sql, ['order_id' => $order_id]);
    }

    protected function getTableName(): string
    {
        return 'order_items';
    }

    protected function getEntityClass(): string
    {
        return OrderItem::class;
    }
}