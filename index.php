<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
//2. підключення файлів системи
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');
//3. встановлення зєднання з БД
//4. виклик роутер
$router = new Router();
$router->run();

?>


