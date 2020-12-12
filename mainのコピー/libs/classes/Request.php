<?php
namespace App;

class Request
{
    public static function get($key) {
        var_dump($_REQUEST);
        return $_REQUEST[$key] ?? null;
    }


}