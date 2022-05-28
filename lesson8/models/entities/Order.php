<?php

namespace app\models\entities;

use app\models\Model;

class Order extends Model
{
    protected $id;
    protected $email;
    protected $telephone_number;
    protected mixed $address;
    protected $session_id;

    protected $props = [
        'email' => false,
        'telephone_number' => false,
        'address' => false,
        'session_id' => false
    ];

    public function __construct(
        $email = null,
        $telephone_number = null,
        $address = null,
        $session_id = null
    )
    {
        $this->email = $email;
        $this->telephone_number = $telephone_number;
        $this->address = $address;
        $this->session_id = $session_id;
    }
}