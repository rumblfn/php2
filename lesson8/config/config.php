<?php

use app\engine\Db;
use app\engine\Session;
use app\engine\Request;
use app\models\repositories\OrderItemRepository;
use app\models\repositories\UserRepository;
use app\models\repositories\BasketRepository;
use app\models\repositories\ProductRepository;
use app\models\repositories\OrderRepository;

return [
    'root' => dirname(__DIR__),
    'controllers_namespaces' => 'app\\controllers\\',
    'views_dir' => dirname(__DIR__) . '/views/',
    'components' => [
        'db' => [
            'class' => Db::class,
            'driver' => 'mysql',
            'host' => 'localhost:8889',
            'login' => 'root',
            'password' => 'root',
            'database' => 'clothes_shop',
            'charset' => 'utf8'
        ],
        'request' => [
            'class' => Request::class
        ],
        'basketRepository' => [
            'class' => BasketRepository::class
        ],
        'productRepository' => [
            'class' => ProductRepository::class
        ],
        'userRepository' => [
            'class' => UserRepository::class
        ],
        'orderRepository' => [
            'class' => OrderRepository::class
        ],
        'session' => [
            'class' => Session::class
        ],
        'orderItemRepository' => [
            'class' => OrderItemRepository::class
        ]
    ]
];