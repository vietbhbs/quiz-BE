<?php
require_once  __DIR__. '/../vendor/autoload.php';
require_once __DIR__. '/../src/Controller/TestController.php';
use Controller\TestController;
// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', TestController::list());

// Run it!
$router->run();
