<?php
require_once 'src/connexion.php';
require_once 'src/articles.php';
require_once 'src/requete.php';
class session{
    public function message(){
        session_start();
        $message = 'ajout fait';
        $_SESSION['message'] = $message;
        header('Location: interface.php');
    }
}