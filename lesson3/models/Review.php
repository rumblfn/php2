<?php

namespace app\models;


class Review extends Model
{
    public $id;
    public $item_id;
    public $login;
    public $text;
    public $time;


    public function __construct($item_id, $login = null, $text = null)
    {
        $this->item_id = $item_id;
        $this->login = $login;
        $this->text = $text;
    }


    protected function getTableName(): string
    {
        return 'reviews';
    }
}