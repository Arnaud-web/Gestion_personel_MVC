<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PageController{
    public function bay(Request $request,$name){
        ob_start();
        include __DIR__.'/../pages/bay.php';
        return new Response(ob_get_clean());
    }
}