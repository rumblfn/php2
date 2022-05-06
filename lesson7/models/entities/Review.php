<?php

namespace app\models\entities;


use app\models\Model;

class Review extends Model
{
    protected $id;
    protected $item_id;
    protected $login;
    protected $text;
    protected $time;

    protected $props = [
        'item_id' => false,
        'login' => false,
        'text' => false,
        'time' => false,
    ];


    public function __construct($item_id, $login = null, $text = null)
    {
        $this->item_id = $item_id;
        $this->login = $login;
        $this->text = $text;
    }


    public static function getTableName(): string
    {
        return 'reviews';
    }
}