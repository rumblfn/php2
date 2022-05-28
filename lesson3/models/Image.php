<?php

namespace app\models;

class Image extends Model
{
    public $id;
    public $item_id;
    public $name;

    public function __construct($item_id, $name = null)
    {
        $this->item_id = $item_id;
        $this->name = $name;
    }


    protected function getTableName(): string
    {
        return 'images';
    }
}