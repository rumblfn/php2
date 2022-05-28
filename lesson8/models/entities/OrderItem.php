<?php

namespace app\models\entities;

use app\models\Model;

class OrderItem extends Model
{
    protected $order_id;
    protected $item_id;

    protected $props = [
        'order_id' => false,
        'item_id' => false,
    ];

    public function __construct($order_id = null, $item_id = null)
    {
        $this->order_id = $order_id;
        $this->item_id = $item_id;
    }
}