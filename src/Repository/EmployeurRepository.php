<?php

namespace App\Repository;

use App\Entity\Employeur;

class EmployeurRepository{

    private $employeurs;
    private $conn;
    
    public function __construct()
    { 
        $this->conn = require __DIR__.'/../bd.php';      
    }

    public function getAll(){
        $conn = $this->conn;
        $this->employeurs = array();
            $sql = "SELECT employeur.* FROM employeur";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $i=0;
                while($row = $result->fetch_assoc()) {
                    $employeur = new Employeur();
                    $employeur->setId($row["id"]);
                    $employeur->setNom($row["nom"]);
                    $employeur->setPrenom($row["prenom"]);
                    $employeur->setDatedenaissance($row["date_de_naissance"]);
                    $employeur->setAdresse($row["adresse"] );
                    $employeur->setEMail($row["email"]);
                    $employeur->setCin($row["cin"] );
                    $this->employeurs[$i] = $employeur;
                    $i++;
                    
                }
            }else{
                $this->employeurs =  new Employeur();
            }
            // $conn->close();

        return $this->employeurs;

    }

    public function getById(int $id){
        $conn = $this->conn;
            $sql = "SELECT employeur.* FROM employeur Where id = $id ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $employeur = new Employeur();
                    $employeur->setId($row["id"]);
                    $employeur->setNom($row["nom"]);
                    $employeur->setPrenom($row["prenom"]);
                    $employeur->setDateDeNaissance($row["date_de_naissance"]);
                    $employeur->setAdresse($row["adresse"] );
                    $employeur->setEMail($row["email"]);
                    $employeur->setCin($row["cin"] );
                    $this->employeurs = $employeur;
                    
                }
            }else{
                $this->employeurs =  new Employeur();
            }
            // $conn->close();

        return $this->employeurs;

    }

    public function save(Employeur $employeur){
        $conn = $this->conn;
        $sql = "INSERT INTO employeur (nom, prenom, date_de_naissance, adresse, email, cin) 
        VALUES ('".$employeur->getNom()."', '".$employeur->getPrenom()."', '".$employeur->getDateDeNaissance()."'
        , '".$employeur->getAdresse()."', '".$employeur->getEmail()."', '".$employeur->getCin()."'
        )";
        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            $employeur->setId($last_id);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // $conn->close();
        return $employeur;     
    }

    public function update(Employeur $employeur){
        $conn = $this->conn;
        
        $sql = "UPDATE  employeur SET nom = '".$employeur->getNom()."' , prenom = '".$employeur->getPrenom()."' , date_de_naissance = '".$employeur->getDateDeNaissance()."'
        , adresse = '".$employeur->getAdresse()."' , email = '".$employeur->getEmail()."' , cin = '".$employeur->getCin()."' WHERE id = ".$employeur->getId()."";
        // $sql = "UPDATE  employeur SET nom = ".'"dfd"'." WHERE id = 3 ";
        if ($conn->query($sql) === TRUE) {
            // $conn->close();
            return $employeur;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // $conn->close();
        return $employeur;
        
    }

}