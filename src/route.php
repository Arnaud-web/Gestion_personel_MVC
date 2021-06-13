<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$route = new RouteCollection;
$route->add('/index', new Route('/', [
    '_controller' => 'App\Controller\PageController::index'
    // '_controller' => [new App\Controller\PageController, 'bay']
]));

$route->add('/employeur_index', new Route('/employeur', [
    '_controller' => 'App\Controller\EmployeurController::index'
    // '_controller' => [new App\Controller\PageController, 'bay']
]));
$route->add('/employeur_new', new Route('/employeur/new', [
    '_controller' => 'App\Controller\EmployeurController::new'
    // '_controller' => [new App\Controller\PageController, 'bay']
]));
$route->add('/employeur_show', new Route('/employeur/{id}', [
    '_controller' => 'App\Controller\EmployeurController::show'
    // '_controller' => [new App\Controller\PageController, 'bay']
]));




$route->add('bay', new Route('/bay/{name}', [
    'name' => 'world',
    '_controller' => 'App\Controller\PageController::bay'
    // '_controller' => [new App\Controller\PageController, 'bay']
]));
return $route;
