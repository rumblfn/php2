<?php

use app\engine\{Autoload, TwigRender, Request, Session};
use app\models\{Product, User};

include dirname(__DIR__) . "/config/config.php";
include ROOT . "/engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);
require_once '../vendor/autoload.php';

Session::getInstance()->start();
$request = Request::getInstance();

$url = explode('/', $_SERVER['REQUEST_URI']);

$controllerName = $request->controllerName ?: 'product';
$actionName = $request->actionName;

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . 'Controller';

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new TwigRender());
    $controller->runAction($actionName);
} else {
    die("контроллера нет");
}
