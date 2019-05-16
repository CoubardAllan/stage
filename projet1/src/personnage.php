<?php
require 'src/connexionbdd.php';
class personnage{
    private $personnage;

    //getter
    public function __construct()
    {
        $this->personnage = new connexionbdd();
    }

    //fonction
    public function recuperation($table){
        foreach ($this->personnage->getConnexion()->query('SELECT nom, prenom, pseudo FROM '.$table) as $row){
            print $row['nom']. "\t";
            print $row['prenom']. "\t";
            print $row['pseudo']. "\n";
        }
    }
}
