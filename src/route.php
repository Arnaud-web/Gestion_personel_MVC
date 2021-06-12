<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$route = new RouteCollection;
$route->add('bay', new Route('/bay/{name}', [
    'name' => 'world',
    '_controller' => 'App\Controller\PageController::bay'
    // '_controller' => [new App\Controller\PageController, 'bay']
]));
return $route;
