<?php

namespace app\models\entities;

use app\models\Model;

class Image extends Model
{
    protected $id;
    protected $item_id;
    protected $name;

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