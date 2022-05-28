<?php

session_start();

use app\engine\Autoload;
use app\models\{Product, User};
use app\engine\TwigRender;

include dirname(__DIR__) . "/config/config.php";
include ROOT . "/engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);
require_once '../vendor/autoload.php';


$controllerName = $_GET['c'] ?: 'product';
$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . 'Controller';

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new TwigRender());
    $controller->runAction($actionName);
} else {
    die("контроллера нет");
}
