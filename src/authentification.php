<?php
require_once 'src/connexion.php';
require_once 'src/session.php';
require_once 'src/deconnexion.php';
class authentification{
    private $login;
    private $session;
    public function __construct()
    {
        $this->login = connexion::getConnexion();
        $this->session = session::getSession();
    }
    public function identification(){
        // Si compte et mdp ne sont remplit
        if(!empty($_POST['compte']) && !empty($_POST['mdp'])) {
            $query = "SELECT nom_compte, mot_de_passe FROM utilisateur WHERE nom_compte = ? AND mot_de_passe = ?";
            $result = $this->login->prepare($query);
            $result->execute([$_POST['compte'],$_POST['mdp']]);
            $user = $result->fetchAll();
            if($user){
                $this->session->set('utilisateur', $user);
                session_start();
                header('Location: interface.php');
            }
            return false;
        }
        return false;
    }
    public function deco(){
        if (session::existe('utilisateur')) {
            unset($_SESSION['utilisateur']);
            header('Location: ./seconnecter.php');
            exit();
        }
    }

}
