<?php
require_once 'src/connexion.php';
require_once 'src/articles.php';
require_once 'src/requete.php';
class session{
    private static $session;
    private function __construct()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
            self::$session = new session();
        }
    }

    public static function get($key)
    {
        return $_SESSION[$key];
    }
    public static function set($key, $values)
    {
        $_SESSION[$key]=  $values;
    }
    public static function existe($key){
        if ((!empty($_SESSION[$key])) && (isset($_SESSION[$key]))  ){
            return true;
        }else{
            return false;
        }
    }
}