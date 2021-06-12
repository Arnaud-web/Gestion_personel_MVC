<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

require __DIR__.'/../vendor/autoload.php';
$request = Request::createFromGlobals();
$response = new Response();
$routes = require __DIR__.'/../src/route.php';
$context = new RequestContext();
$context->fromRequest($request);
$urlMatcher = new UrlMatcher($routes,$context);
$controllerResolver = new ControllerResolver();
$argumentResolver = new ArgumentResolver();
$pathInfo = $request->getPathInfo();
try{
    $resultat = $urlMatcher->match($pathInfo);
    $request->attributes->add($resultat);
    $controller = $controllerResolver->getController($request);
    // call_user_func($resultat['_controller']);
    // die;
    $arguments = $argumentResolver->getArguments($request,$controller);

    $response = call_user_func_array($controller,$arguments);
} catch (ResourceNotFoundException $e) {
    $response->setContent("la page demandée n'existe pas");
    $response->setStatusCode(404);
} catch(Exception $e){
    $response->setContent("Une erreur est arrivée sur le serveur ");
    $response->setStatusCode(500);
}

#var_dump($resultat);

$response->send();