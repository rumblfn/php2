<?php

use app\models\{Product, User, Cart};
use app\engine\Db;
use app\models\{Triangle, Circle, Rectangle};

include "../engine/Autoload.php";
spl_autoload_register([new Autoload(), 'loadClass']);

$db = new Db();
$cart = new Cart($db);
$product = new Product($db);
$user = new User($db);


echo $product->getOne(4);
echo $product->getAll();

echo $user->getOne(1);
echo $user->getAll();

echo $cart->getAll();


$triangle = new Triangle(3, 3, 3);
$circle = new Circle(10);
$rectangle = new Rectangle(5, 6);

echo $triangle->info();
echo $circle->info();
echo $rectangle->info();

echo $triangle->getSquare();
echo $circle->getSquare();
echo $rectangle->getSquare();

echo $triangle->getPerimeter();
echo $circle->getPerimeter();
echo $rectangle->getPerimeter();

