<?php
const APPLICATION_DIR = __DIR__. '/../';
const APPLICATION_URL_LIBS = __DIR__. '/';

require_once APPLICATION_DIR. 'libs/smarty/Smarty.class.php';
require_once APPLICATION_DIR. 'vendor/autoload.php';
require_once APPLICATION_DIR. 'libs/function.php';
require_once APPLICATION_DIR. 'libs/classes/AuthUser.php';
require_once APPLICATION_DIR. 'libs/classes/SessionManager.php';

session_start();

use Dotenv\Dotenv;
$dotenv = new Dotenv(APPLICATION_DIR);
$dotenv->load();