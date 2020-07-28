<?php
    $db_user = 'root';
    $db_pass = 'root';
    $db_host = 'localhost';
    $db_name = "tr_ng";
    $db_type = "mysql";
        
    $format = "%s:host=%s;dbname=%s;charset=utf8";
    $dsn = sprintf($format, $db_type, $db_host, $db_name);
        
    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch(PDOException $Exception) {
        die("エラー：". $Exception->getMessage());
    }
?>