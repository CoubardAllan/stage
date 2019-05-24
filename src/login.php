<?php
require 'src/connexion.php';
require 'src/session.php';
class login{
    private $login;
    /**
     * @var session
     */
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
                header('Location: interface.php');
            }
            return false;
        }
        return false;
    }
}
