<?php
require_once 'src/connexionbdd.php';
require_once 'src/personnage.php';
class personnagerequest{

    private $connexion;
    public function __construct()
    {
        $this->connexion = new connexion();

    }

    public function recuperation($table){
        $perso=array();
        foreach ($this->connexion->getConnexion()->query('SELECT nom, prenom, pseudo FROM '.$table) as $row){
            $personnage = new personnage();
            $this->setNom($nom['nom']);
            $this->setPrenom($prenom['prenom']);
            $this->setPseudo($pseudo['pseudo']);
            $perso[]= $personnage;
            return $perso;
        }
    }
}
