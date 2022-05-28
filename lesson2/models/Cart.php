<?php

namespace app\models;

use app\engine\Db;

class Cart extends Model
{
    public $id;
    public function getTableName(): string
    {
        return "cart";
    }
}