<?php

use app\engine\Autoload;
use app\models\{Product, User};

include dirname(__DIR__) . "/config/config.php";
include ROOT . "/engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


$controllerName = $_GET['c'] ?: 'product';
$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . 'Controller';

if (class_exists($controllerClass)) {
    $controller = new $controllerClass;
    $controller->runAction($actionName);
} else {
    die("контроллера нет");
}
