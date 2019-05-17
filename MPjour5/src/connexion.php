<?php
require_once 'src/personnage.php';
require_once 'src/requete.php';
class connexion{
    private $connexion;
    public function __construct()
    {
        try{
            $this->connexion = new PDO('mysql:host=localhost;dbname=mp1','root','');
            echo 'connexion';
        }catch (PDOException $e){
            echo '<br>'.$e->getMessage();
        }
    }


    public function getConnexion()
    {
        return $this->connexion;
    }
}