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
        }
    }

    public static function getSession()
    {
        if (!isset(self::$session)) {
            self::$session = new session();
        }
        return self::$session;
    }
    public static function get($key)
    {
            return self::$session =  $_SESSION[$key];
    }
    public static function set($key, $values)
    {
           self::$session = $_SESSION[$key] = $values;
    }
    public static function existe($key){
        if ((!empty($_SESSION[$key])) && (isset($_SESSION[$key]))  ){
            return true;
        }else{
            return false;
        }
    }
}