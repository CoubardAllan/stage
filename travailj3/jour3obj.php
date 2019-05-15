<?php

class connexion
{
    private $connexion;

    public function __construct()
    {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=allan', 'root', '');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'reussit';
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }
}

$connec = new connexion();