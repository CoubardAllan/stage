<?php

class animal{
    private $poids;
    private $type;
    private $libelle;
    private $isCarnivore;


    //constructeur
    public function __construct($libelle,$isCarnivore)
    {
        $this->libelle = $libelle;
        $this->isCarnivore = $isCarnivore;
    }


    //getter
    public function getPoids()
    {
        return $this->poids;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getLibelle()
    {
        return $this->libelle;
    }
    public function getIsCarnivore()
    {
        return $this->isCarnivore;
    }


    //setter
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
    public function setIsCarnivore($isCarnivore)
    {
        $this->isCarnivore = $isCarnivore;
    }

    //fonction
    public function parler(){
        echo 'Je suis un animal et je peux parler';
    }
}

