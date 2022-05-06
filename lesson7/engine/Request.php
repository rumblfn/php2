<?php

namespace app\engine;

use app\traits\TSingletone;
use Exception;

class Request
{
    use TSingletone;

    private $requestParsed = false;
    protected $requestString;
    protected $controllerName;
    protected $actionName;

    protected $method;
    protected $params = [];

    public function __get($name)
    {
        if (!$this->requestParsed) {
            $this->parseRequest();
        }
        return $this->$name;
    }

    protected function parseRequest()
    {
        $this->requestString = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];

        $url = explode('/', $this->requestString);
        $url[] = '';

        $this->controllerName = $url[1];
        $this->actionName = $url[2];

        $this->params = $_REQUEST;

        $data = json_decode(file_get_contents('php://input'));

        if (!is_null($data)) {
            foreach ($data as $key => $value) {
                $this->params[$key] = $value;
            }
        }
        $this->requestParsed = true;
    }
}