<?php 
namespace App\Entity;


class Employeur {

    private $id;
    private $nom;
    private $prenom;    
    private $datedenaissance;    
    private $adresse;    
    private $email;    
    private $cin;    
  
    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getDateDeNaissance(){
        return $this->datedenaissance;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCin(){
        return $this->cin;
    }

    public function setNom(string $nom){
        $this->nom = $nom;
    }
    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
    }
    public function setId(string $id){
        $this->id = $id;
    }
    public function setDateDeNaissance(string $datedenaissance){
        $this->datedenaissance = $datedenaissance;
    }
    public function setAdresse(string $adresse){
        $this->adresse = $adresse;
    }
    public function setEMail(string $email){
        $this->email = $email;
    }
    public function setCin(string $cin){
        $this->cin = $cin;
    }

}