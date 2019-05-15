<?php

class request
{
    private $connexion;
    private $dbh;


    //constructeur
    public function __construct()
    {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=allan', 'root', '');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'réussit';
        } catch (PDOexception $e) {
            echo "<br>" . $e->getMessage();
        }
    }



    //getter et setter
    public function setConnexion($connexion)
    {
        $this->connexion = $connexion;
    }
    public function getConnexion()
    {
        return $this->connexion;
    }
    public function getDbh()
    {
        return $this->dbh;
    }
    function setDbh($dbh)
    {
        $this->dbh = $dbh;
    }
    public function selection($nomtable){
        $pdst = $dbh->query("SELECT * FROM articles");
        $dbh->exec($pdst);
    }
    public function insertion(){

    }
    public function effacer(){

    }
    public function misajour(){

    }
}
$connexion = new request();
$connexion->selection('articles');