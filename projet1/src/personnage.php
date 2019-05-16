<?php
require_once 'src/connexionbdd.php';
class personnage
{
    private $nom;
    private $prenom;
    private $pseudo;


    //getter
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }



    //setter
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

}
