<?php
namespace App;

class personnage{
    private $nom;
    private $prenom;
    private $pseudo;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $nom
     */
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