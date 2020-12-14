<?php

namespace App;

class DatabaseAccessor
{
    static $instance = null;

    private $pdo;

    private final function __construct()
    {
        $db_user = $_ENV['DB_USER'];
        $db_pass = $_ENV['DB_PASS'];
        $db_host = 'localhost';
        $db_name = 'tr_ng';
        $db_type = 'mysql';

        $dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

        try {
            $this->pdo = new \PDO($dsn, $db_user, $db_pass);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $Exception) {
            die('エラー：' . $Exception->getMessage());
        }
    }

    public static function getInstance()
    {
        return static::$instance ?? static::$instance = new static();
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}
