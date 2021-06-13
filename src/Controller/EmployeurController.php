<?php
namespace App\Controller;

use App\Entity\Employeur;
use App\Repository\EmployeurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class EmployeurController{
    public function index(Request $request){
        $repoEmployeur = new EmployeurRepository();
        $employeurs = $repoEmployeur->getAll();
        ob_start();
        include __DIR__.'/../pages/employeur/index.php';
        return new Response(ob_get_clean());
    }
    public function new(Request $request){

        $repoEmployeur = new EmployeurRepository();
        $employeur= new Employeur();
        if(count($request->request)>1){
            $employeur->setNom( $request->request->get("nom"));
            $employeur->setPrenom( $request->request->get("prenom"));
            $employeur->setAdresse( $request->request->get("adresse"));
            $employeur->setDateDeNaissance( $request->request->get("date_de_naissance"));
            $employeur->setEMail( $request->request->get("email"));
            $employeur->setCin( $request->request->get("cin"));
            $repoEmployeur->save($employeur);
            $title = "show";
            ob_start();
            include __DIR__.'/../pages/employeur/show.php';
            return new Response(ob_get_clean());
            
        }
        $title = "new";
        ob_start();
        include __DIR__.'/../pages/employeur/new.php';
        return new Response(ob_get_clean());
    }
    public function edit(Request $request,int $id){

        $repoEmployeur = new EmployeurRepository();
        $employeur= $repoEmployeur->getById($id);
        if(count($request->request)>1){
            $employeur->setNom( $request->request->get("nom"));
            $employeur->setPrenom( $request->request->get("prenom"));
            $employeur->setAdresse( $request->request->get("adresse"));
            $employeur->setDateDeNaissance( $request->request->get("date_de_naissance"));
            $employeur->setEMail( $request->request->get("email"));
            $employeur->setCin( $request->request->get("cin"));
            $repoEmployeur->update($employeur);
            $title = "show";
            ob_start();
            include __DIR__.'/../pages/employeur/show.php';
            return new Response(ob_get_clean());
            
        }
        $title = "edit";
        ob_start();
        include __DIR__.'/../pages/employeur/edit.php';
        return new Response(ob_get_clean());
    }
 

    public function show(Request $request,int $id){
        $repoEmployeur = new EmployeurRepository();
        $employeur= $repoEmployeur->getById($id);
        ob_start();
        include __DIR__.'/../pages/employeur/show.php';
        return new Response(ob_get_clean());
    }
   

}