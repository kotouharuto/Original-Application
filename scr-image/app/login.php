<?php
require_once "../libs/init.php";
require_once "login_exec.php";

if (isset($_SESSION['user_id'])) {
    // header("Location: home.php");
}
  


$smarty = getSmarty();
$smarty->display('../libs/templates/login.tpl');

?>