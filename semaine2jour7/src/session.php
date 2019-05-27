<?php
require_once 'src/connexion.php';
require_once 'src/articles.php';
require_once 'src/requete.php';
class session{
    private $session;
    public function __construct(){
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
            $_SESSION['message'] = 'ajout fait';
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