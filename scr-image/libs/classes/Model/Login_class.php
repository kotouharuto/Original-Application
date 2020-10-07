<?php

namespace APP\Model;

use APP\DatabaseAccessor;

class Login
{
    private $table_name = 'users';

    public function Signin($user_id, $email, $password) {
        $pdo = DatabaseAccessor::getInstance()->getConnection();
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}