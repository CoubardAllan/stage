<?php
require 'src/connexion.php';
class login{
    private $login;
    public function __construct()
    {
        $this->login = connexion::getConnexion();
    }
    public function identification(){
        if(empty($_POST['compte']) && empty($_POST['mdp'])) {
            echo '<strong>champ nécessaire</strong>';
        }elseif(!empty($_POST['compte']) && !empty($_POST['mdp'])){
                $query = "SELECT * FROM utilisateur WHERE nom_compte = ".$_POST['compte']. "AND mot_de_passe = ".$_POST['mdp'];
                $this->login->exec($query);
                session_start();
                header('Location: interface.php');
            }
        }
}
