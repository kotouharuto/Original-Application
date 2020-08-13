<?php

require_once "/Applications/MAMP/bin/php/php7.4.2/lib/php/Smarty/smarty/Smarty.class.php";

$smarty = new Smarty();

$smarty->cache_dir = "/Applications/MAMP/htdocs/Original-Application/scr-image/libs/cache";
$smarty->config_dir = "/Applications/MAMP/htdocs/Original-Application/scr-image/libs/config";
$smarty->template_dir = "/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates";
$smarty->compile_dir = "/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates_c";
$smarty->display('login.tpl');
?>