<?php
require_once 'src/connexion.php';
require_once 'src/articles.php';
require_once 'src/requete.php';
class session{
    private $session;
    public function message($message){
        if (session_status() === PHP_SESSION_ACTIVE) {
            echo 'erreur';
        }else{
            session_start();
            $_SESSION['message'] = $message;
            header('Location: interface.php');
        }
    }


    public function getSession()
    {
        return $this->session;
    }
    public function setSession($session)
    {
        $this->session = $session;
    }
}