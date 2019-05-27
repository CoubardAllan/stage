<?php
namespace App\Connexion;

class connexion{
    private static $connexion;
    private function __construct()
    {
    }
    public static function getConnexion(){
        if (!isset(self::$connexion)) {
            try {
                self::$connexion = new \PDO('mysql:host=localhost;dbname=mp1', 'root', '');
            }catch (\PDOException $e){
                echo '<br>'.$e->getMessage();
            }
        }
        return self::$connexion;
    }
}
