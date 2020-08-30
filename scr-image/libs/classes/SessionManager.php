<?php

class SessionManager
{
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }
    public static function get($key) {
        return $_SESSION[$key] ?? null;
    }
    public static function unset($key) {
        if (false === array_key_exists($key, $_SESSION)) {
            return;
        }
        $_SESSION[$key] = null;
        unset($_SESSION[$key]);
    }
}
