<?php
require_once 'src/connexion.php';
require_once 'src/articles.php';
require_once 'src/requete.php';
class session{
    private $session;
    public function __construct(){
        if (session_status() === PHP_SESSION_ACTIVE) {
            echo 'erreur';
        }else{
            session_start();
            $_SESSION['message'] = 'ajout fait';
            header('Location: interface.php');
        }
    }


    public function get($key)
    {
        return $_SESSION[$key];
    }
    public function set($key, $values)
    {
        $_SESSION[$key]=  $values;
    }
}