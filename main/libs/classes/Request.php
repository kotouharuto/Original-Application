<?php
namespace App;

class Request
{
    public static function get($key) {
        return $_REQUEST[$key] ?? null;
    }


}