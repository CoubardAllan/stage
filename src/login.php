<?php
require 'src/connexion.php';
class login{
    private $login;
    public function __construct()
    {
        $this->login = connexion::getConnexion();
    }
    public function identification(){
        if(empty($_POST['nom_du_compte']) && empty($_POST['mot_de_passe'])){
            echo 'champ nécessaire';
            if (){

            }else{
                $query = "SELECT * FROM utilisateur WHERE nom_compte = ".$_POST['nom_du_compte']. "AND mot_de_passe = ".$_POST['mot_de_passe'];
                session_start();
                header('Location: interface.php');
            }
        }
    }
}