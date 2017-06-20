<?php

include __DIR__ . '/../protected/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/' , $uri);
$controllerClass = '\\App\\Controllers\\' . $parts[1];
$actionName = $parts[2] ?: 'Default';

$controller = new $controllerClass;
$controller->action($actionName);




