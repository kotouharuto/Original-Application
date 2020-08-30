<?php

require_once 'SessionManager.php';
require_once 'AuthUser.php';
// session_start();

$user_id = 111;

$auth = new AuthUser();
$auth->setLoggedIn($user_id);

echo 'ログインしました';
