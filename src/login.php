<?php
require 'src/connexion.php';
class login{
    private $login;
    public function __construct()
    {
        $this->login = connexion::getConnexion();
    }
    public function identification(){
        if((isset($_POST['compte']) && (isset($_POST['mdp']))) && ((!empty($_POST['compte'])) && (!empty($_POST['mdp']))) ){
            $query = "SELECT * FROM utilisateur WHERE nom_compte = ? AND mot_de_passe = ?";
            $result = $this->login->prepare($query);
            $result->execute([$_POST['compte'],$_POST['mdp']]);
            $requete2 = $result->fetchAll();
            var_dump($requete2);

        }elseif((!isset($_POST['compte']) || (!isset($_POST['mdp']))) || ((empty($_POST['compte'])) || (empty($_POST['mdp']))) ){
            $message = 'champ necessaire';
            echo '<strong>'.$message.'</strong>';
            }
        }
}
