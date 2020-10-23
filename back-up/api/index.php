<?php
// 引入composer
require_once __DIR__ . '../../vendor\autoload.php';
define('API_SRC', realpath(__DIR__ . '../../src'));
define('API_PUBLIC', realpath(__DIR__ . '../../'));
define('API_ROOT', realpath(__DIR__ . '../../'));
define('API_DEBUG',true);
require_once __DIR__  . "/common/functions.php";
\App::init();
\App::start();
