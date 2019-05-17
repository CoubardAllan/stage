<?php
require_once 'src/connexion.php';
require_once 'src/personnage.php';

class requete{
    private $connexion;
    public function __construct()
    {
        $this->connexion = new connexion();
    }
    public function recup($table){
        $tableau =[];
        foreach ($this->connexion->getConnexion()->query('SELECT nom, prenom, pseudo FROM '.$table) as $row){
            $perso = new personnage();
            $perso->setNom($row['nom']);
            $perso->setPrenom($row['prenom']);
            $perso->setPseudo($row['pseudo']);
            $tableau[] = $perso;
        }
        return $tableau;
    }
}
