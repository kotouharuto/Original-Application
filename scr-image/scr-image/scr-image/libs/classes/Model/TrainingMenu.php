<?php

namespace App\Model;

use App\DatabaseAccessor;

class TrainingMenu
{
    private $table_name = 'trainingmenu';

    public function fetchMenus($user_id, $date)
    {
        $pdo = DatabaseAccessor::getInstance()->getConnection();

        $sql = "SELECT * FROM `{$this->table_name}` WHERE user_id = :user_id AND date = :date";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':user_id', $user_id, \PDO::PARAM_INT);
        $stmt->bindValue(':date', $date, \PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();
    }
}


