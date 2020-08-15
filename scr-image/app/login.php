<?php
require_once "../libs/init.php";
db_connect();

$smarty = getSmarty();
$smarty->display('../libs/templates/login.tpl');
?>