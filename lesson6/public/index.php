<?php

session_start();

use app\engine\Autoload;
use app\models\{Product, User};
use app\engine\TwigRender;
use app\engine\Request;

include dirname(__DIR__) . "/config/config.php";
include ROOT . "/engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);
require_once '../vendor/autoload.php';

$request = new Request();

$url = explode('/', $_SERVER['REQUEST_URI']);

$controllerName = $request->getControllerName() ?: 'product';
$actionName = $request->getActionName();

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . 'Controller';

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new TwigRender());
    $controller->runAction($actionName);
} else {
    die("контроллера нет");
}
