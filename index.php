<?php
session_start();
require_once 'Autoloader.php';
\Project\Autoloader::init();

$uri = $_SERVER['REQUEST_URI'];
$self = $_SERVER['PHP_SELF'];

$directories = str_replace(basename($self), '', $self);
$requestString = str_replace($directories, '', $uri);

$requestParams = explode("/", $requestString);

$controllerName = array_shift($requestParams);
$actionName = array_shift($requestParams);

var_dump($actionName);
\Project\Core\Database::setInstance(
    \Project\Config\DatabaseConfig::DB_INSTANCE,
    \Project\Config\DatabaseConfig::DB_DRIVER,
    \Project\Config\DatabaseConfig::DB_USER,
    \Project\Config\DatabaseConfig::DB_PASS,
    \Project\Config\DatabaseConfig::DB_NAME,
    \Project\Config\DatabaseConfig::DB_HOST
);

$app = new \Project\Application($controllerName, $actionName, $requestParams);
$app->start();