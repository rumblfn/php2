<?php

namespace app\models\repositories;

use app\models\entities\Basket;
use app\models\Model;
use app\models\Repository;
use app\engine\App;

class BasketRepository extends Repository
{
    public function getBasket($session_id)
    {
        $sql = "SELECT basket.id as basket_id, items.id as prod_id, items.title, items.description, items.price FROM `basket`, `items` WHERE `session_id` = :session_id AND basket.item_id = items.id";
        return App::call()->db->queryAll($sql, ['session_id' => $session_id]);
    }

    public function deleteAll($session_id)
    {
        $tableName = $this->getTableName();
        $sql = "DELETE FROM $tableName WHERE session_id = :session_id";
        return App::call()->db->execute($sql, ['session_id' => $session_id]);
    }

    protected function getEntityClass(): string
    {
        return Basket::class;
    }

    protected function getTableName(): string
    {
        return 'basket';
    }
}