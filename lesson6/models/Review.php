<?php

namespace app\models;


class Review extends DBModel
{
    public $id;
    public $item_id;
    public $login;
    public $text;
    public $time;

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