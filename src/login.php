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
        }else{
                $query = "SELECT * FROM utilisateur WHERE nom_compte = ".$_POST['compte']. "AND mot_de_passe = ".$_POST['mdp'];
                $this->login->prepare($query)->execute([$_POST['compte'],$_POST['mdp']]);
                $requete2 = $this->login->fetchAll();
                var_dump($requete2);
                session_start();
            }
        }
}
