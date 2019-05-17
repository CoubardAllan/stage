<?php
require_once 'src/connexion.php';
require_once 'src/requete.php';
class personnage{
    private $nom;
    private $prenom;
    private $pseudo;


    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function getNom()
    {
        return $this->nom;
    }
}