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
$router->add('/Anonymous', array('Controller' => 'AnonymousController', 'action' => 'view'));
$router->add('/Static', array('Controller' => 'StaticController', 'action' => 'view'));
$router->add('/Readonly', array('Controller' => 'ReadonlyController', 'action' => 'view'));
$router->add('/DefaultAccessModifier', array('Controller' => 'DefaultAccessModifierController', 'action' => 'view'));
$router->add('/Destructor', array('Controller' => 'DestructorController', 'action' => 'view'));
$router->add('/Serialize', array('Controller' => 'SerializeController', 'action' => 'view'));
$router->add('/FinalKeyword', array('Controller' => 'FinalKeywordController', 'action' => 'view'));
$router->add('/ClassConstant', array('Controller' => 'ClassConstantController', 'action' => 'view'));
$router->add('/Interface', array('Controller' => 'InterfaceController', 'action' => 'view'));
$router->add('/Namespace', array('Controller' => 'NamespaceController', 'action' => 'view'));

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
