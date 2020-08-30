<?php
function Logout() {
    require_once "../libs/init.php";
    $_SESSION = array();
    session_destroy();
    header("Location: login.php");
}

Logout();