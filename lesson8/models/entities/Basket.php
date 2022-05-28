<?php

namespace app\models\entities;

use app\models\Model;

class Basket extends Model
{
    protected $id;
    protected $session_id;
    protected $item_id;

    protected $props = [
        'session_id' => false,
        'item_id' => false
    ];

    public function __construct($session_id = null, $item_id = null)
    {
        $this->session_id = $session_id;
        $this->item_id = $item_id;
    }
}