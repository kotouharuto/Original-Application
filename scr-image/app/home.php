<?php

require_once '../libs/init.php';

$pdo = db_connect();



$smarty = getSmarty();
$smarty->display('../libs/templates/login.tpl');