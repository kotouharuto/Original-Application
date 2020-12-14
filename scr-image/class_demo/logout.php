<?php

require_once 'SessionManager.php';
require_once 'AuthUser.php';
// session_start();

$auth = new AuthUser();
$auth->logOut();

echo 'ログアウトしました';
