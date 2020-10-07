<?php

namespace APP\Model;

use APP\DatabaseAccessor;

class SignUp 
{
    private $table_name = 'users';

    public function Create_User($user_id, $username, $email, $password) {
        $pdo = DatabaseAccessor::getInstance()->getConnection();
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }
}