<?php

namespace app\models;

class Basket extends Model
{
    public $id;
    public $item_id;
    public $user_id;

    public function __construct($item_id, $user_id)
    {
        $this->item_id = $item_id;
        $this->user_id = $user_id;
    }


    protected function getTableName(): string
    {
        return 'basket';
    }
}