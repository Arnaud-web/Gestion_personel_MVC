<?php
namespace App\Controller;

use App\Repository\EmployeurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PageController{
    public function index(Request $request){
        $repoEmployeur = new EmployeurRepository();
        $employeurs = $repoEmployeur->getAll();
        ob_start();
        include __DIR__.'/../pages/home/index.php';
        return new Response(ob_get_clean());
    }

    public function bay(Request $request,$name){
        ob_start();
        include __DIR__.'/../pages/bay.php';
        return new Response(ob_get_clean());
    }
}