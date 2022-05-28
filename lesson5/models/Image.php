<?php

namespace app\models;

class Image extends DBModel
{
    public $id;
    public $item_id;
    public $name;

    protected $props = [
        'item_id' => false,
        'name' => false,
    ];

    public function __construct($item_id, $name = null)
    {
        $this->item_id = $item_id;
        $this->name = $name;
    }


    public static function getTableName(): string
    {
        return 'images';
    }
}