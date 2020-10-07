<?php

namespace APP\Model;

use APP\DatabaseAccessor;

class Menuinsert
{
    private $table_name = 'trainingmenu';

    public function INSERT($pdo, $date, $user_id, $menu, $num, $setnum) {
        $pdo = DatabaseAccessor::getInstance()->getConnection();
        $sql = "INSERT INTO trainingmenu (user_id, date, menu, num, setnum) VALUES (:user_id, :date, :menu, :num, :setnum)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_STR);
        $stmt->bindValue(':date', $date, PDO::PARAM_STR);
        $stmt->bindValue(':menu', $menu, PDO::PARAM_STR);
        $stmt->bindValue(':num', $num, PDO::PARAM_STR);
        $stmt->bindValue(':setnum', $setnum, PDO::PARAM_STR);
        $stmt->execute();
        $pdo->commit();
    }
}