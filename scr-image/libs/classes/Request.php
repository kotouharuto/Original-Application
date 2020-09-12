<?php
class Request
{
    public static function get($key) {
        if($_REQUEST == $key) {
            return $key;
        } else if($_REQUEST != $key) {
            return null;
        }
    }


}