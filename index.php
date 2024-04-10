<?php
require "Router/route.php";
$path = $_SERVER['REQUEST_URI'];

if (strpos($path, '?')) {
    $path = substr($path, 0, strpos($path, '?'));
}

$router = new Router;

$router->add('/', array('Controller' => 'HomeController', 'action' => 'index'));
$router->add('/home', array('Controller' => 'HomeController', 'action' => 'home'));
$router->add('/products', array('Controller' => 'ProductController', 'action' => 'products'));
$router->add('/products/show', array('Controller' => 'ProductController', 'action' => 'productsList'));

$param = $router->searchPath($path);
if (!$param) {
    echo 'Page Not Found';
    exit;
}

$controller = $param['Controller'];
$action = $param['action'];

require "Controller/$controller.php";

$controller_object = new $controller();
$controller_object->$action();
