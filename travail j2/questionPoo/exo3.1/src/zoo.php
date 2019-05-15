<?php
require_once 'src/animaux.php';
require_once 'src/lion.php';
require_once 'src/cheval.php';
require_once 'index.php';
class zoo{
    private $nombre_animaux;
    private $animal;

    public function __construct($nombre_animaux)
    {
        $this->nombre_animaux = $nombre_animaux;
    }

    //getter
    public function getAnimal()
    {
        return $this->animal;
    }
    public function getNombreAnimaux()
    {
        return $this->nombre_animaux;
    }
    public function setNombreAnimaux($nombre_animaux)
    {
        $this->nombre_animaux = $nombre_animaux;
    }
    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }



    //fonction
    public function ajout($animal){
        $this->animal[] = $animal;
    }
    public function crier(){
        if(!$this->animal) {
            echo "\n\r il n'y a pas d'animal\n\r";
            return;
        }
        /** @var Animal $animal */
        foreach ($this->animal as $animal) {
            $animal->parler();
        }
        /*for ($i = 0; $i <= count($this->animal) ; $i++) {
            //$this->animal[$i]->crier();
        echo 'Je suis un animal';
        }*/
    }

}


