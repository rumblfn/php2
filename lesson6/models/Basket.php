<?php

namespace app\models;

use app\engine\Db;

class Basket extends DBModel
{
    protected $id;
    protected $session_id;
    protected $item_id;

    protected $props = [
        'session_id' => false,
        'item_id' => false
    ];

    public function __construct($session_id = null, $item_id = null)
    {
        $this->session_id = $session_id;
        $this->item_id = $item_id;
    }

    public static function getBasket($session_id)
    {
        $sql = "SELECT basket.id as basket_id, items.id as prod_id, items.title, items.description, items.price FROM `basket`, `items` WHERE `session_id` = :session_id AND basket.item_id = items.id";
        return Db::getInstance()->queryAll($sql, ['session_id' => $session_id]);
    }

    public static function getTableName(): string
    {
        return 'basket';
    }
}