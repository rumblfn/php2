<?php

namespace app\engine;

use app\traits\TSingletone;

class Session
{
    use TSingletone;

    public function start() {
        session_start();
    }

    public function destroy() {
        session_destroy();
    }

    public function regenerate() {
        session_regenerate_id();
    }

    public function getId() {
        return session_id();
    }

    public function get($key) {
        return $_SESSION[$key];
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }
}