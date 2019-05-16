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
        $requete = 'SELECT nom, prenom, pseudo FROM '.$table;
        foreach ($this->connexion->getConnexion()->query('SELECT nom, prenom, pseudo FROM '.$table) as $row){
            print $row['nom']. "\t";
            print $row['prenom']. "\t";
            print $row['pseudo']. "\n";
        }
    }
}