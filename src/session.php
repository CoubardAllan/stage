<?php
class session{
    private static $session;
    private function __construct()
    {
        if (session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }
    }
    public static function getSession(){
        if (!isset(self::$session)){
            self::$session = new session();
        }
        return self::$session;
    }
    public static function get($clef){
        return self::$session = $_SESSION[$clef];
    }
    public static function set($clef, $valeur){
        self::$session = $_SESSION[$clef] = $valeur;
    }
    public static function existe($clef){
        if ((!empty($_SESSION[$clef])) && (isset($_SESSION[$clef])) ){
            return true;
        }else{
            return false;
        }
    }
}