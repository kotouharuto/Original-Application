<?php
const APPLICATION_DIR = __DIR__. '/../';
require_once APPLICATION_DIR. 'libs/smarty/Smarty.class.php';
require_once __DIR__.'/vendor/autoload.php';
require_once APPLICATION_DIR. 'libs/function.php';
require_once APPLICATION_DIR. 'libs/classes/AuthUser.php';
require_once APPLICATION_DIR. 'libs/classes/SessionManager.php';
require_once APPLICATION_DIR. 'libs/classes/Request.php';

session_start();

//require

//use
use Sample\sampleClass;

$sc = new sampleClass;
$sc->Hello();