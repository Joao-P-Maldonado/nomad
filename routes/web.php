<?php

$routes = [
    'index' => 'Main@index',
    'register' => 'Main@register'
];

$action = 'index';

if(isset($_GET['a']) && key_exists($_GET['a'], $routes)) $action = $_GET['a'];

$route = explode('@', $routes[$action]);
$controller = 'app\\Controllers\\'  . ucfirst($route[0]);
$method = $route[1];
$path = new $controller();
$path->$method();