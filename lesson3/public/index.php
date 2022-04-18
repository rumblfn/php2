<?php

use app\engine\Autoload;
use app\models\{Product, User};
use app\engine\Db;

//TODO добавьте абсолютные пути
include "../engine/Autoload.php";
include "../config/config.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Product("кроссовки","КРОССОВКИ FORUM LOW CITY", 125);
$product->insert();
var_dump($product);

$user = new User("Admin", 12345);
$user->insert();
var_dump($user);
var_dump($user->delete());
var_dump($product->getOne(1));
//var_dump($product->getAll());
$getted_product = $product->getOne(1); // ?
var_dump($getted_product);



//$product = new Product();

//$product = $product->getOne(2);
//$product->delete();
