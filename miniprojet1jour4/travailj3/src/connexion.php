<?php
require_once 'index.php';
require_once 'src/request.php';
    class Connexion
    {
        private $connexion;
        public function __construct()
    {
        try {
            $this->connexion = new PDO("mysql:host=localhost;dbname=allan",'root','');
            echo 'connexion reussie';
        }catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        }
        }

        public function getConnexion()
        {
        return $this->connexion;
        }
        public function setConnexion($connexion)
        {
            $this->connexion = $connexion;
        }
    }
