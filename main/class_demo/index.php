<?php

require_once 'SessionManager.php';
require_once 'AuthUser.php';
// session_start();

$auth = new AuthUser();
if ($auth->isLoggedIn()) {
    $user_id = $auth->getLoggedInUserId();
    echo $user_id , "でログインしています。";
} else {
    echo 'ログインしていません。';
}
?>

<hr>

<a href="login.php">ログインする</a><br>
<a href="logout.php">ログアウトする</a><br>
