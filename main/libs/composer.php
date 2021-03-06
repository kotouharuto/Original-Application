<?php

//require
require_once __DIR__.'/vendor/autoload.php';

//for .env
use Dotenv\Dotenv;

$dotenv = new Dotenv(__DIR__);
$dotenv->load(); //.envが無いとエラーになる

//for monolog
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//ログにつくprefixを与えてインスタンス作成
$log = new Logger('MONOLOG_TEST');
//ログレベルをDEBUG（最も低い）に設定
$handler = new StreamHandler('./app.log',Logger::DEBUG);
$log->pushHandler($handler);


//利用 ///////////////////////////////////

//.env
//変数名が他の環境変数と被らないように注意
$name = getenv('TEST_NAME');
echo $name;

//monolog
$log->addDebug('でばっぐ');
$log->addInfo('いんふぉ');
$log->addWarning('わーにんぐ');
$log->addError('えらー');