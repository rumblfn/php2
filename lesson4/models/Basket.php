<?php

namespace app\models;

class Basket extends DBModel
{
    public $id;
    public $item_id;
    public $user_id;
    public $session_id;

    public function __construct($item_id, $user_id)
    {
        $this->item_id = $item_id;
        $this->user_id = $user_id;
    }

    public static function getBasket()
    {
        return [];
    }

    public static function getTableName(): string
    {
        return 'basket';
    }
}