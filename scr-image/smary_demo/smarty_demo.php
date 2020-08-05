<?php

require 'libs/smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir    = 'libs/smarty_template';
$smarty->compile_dir     = 'libs/smarty_compile';
$smarty->config_dir      = 'libs/smarty_config';
$smarty->cache_dir       = 'libs/smarty_cache';

$smarty->left_delimiter  = '{{';
$smarty->right_delimiter = '}}';

$smarty->assign('title', 'PHP Smary test');

$smarty->display('test.html');
