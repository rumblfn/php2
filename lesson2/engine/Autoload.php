<?php

class Autoload
{
    public function loadClass($className)
    {
        $namespace_path = str_replace('\\', "/", $className);
        $normal_path_to_class = str_replace("app", "..", $namespace_path);
        $normal_path_to_class .= '.php';
        include $normal_path_to_class;
    }
}