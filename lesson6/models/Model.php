<?php

namespace app\models;
use app\interfaces\IModel;

abstract class Model implements IModel
{

    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->props)) {
            $this->props[$name] = true;
            $this->$name = $value;
        }
        return null;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->props)) {
            return $this->$name;
        }
        return null;
    }

    public function __isset($name)
    {
        return $this->__get($name);
    }
}