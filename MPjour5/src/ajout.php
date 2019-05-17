<?php

class ajout {
    public function __construct()
    {

        try {

            $dbh = new PDO('mysql:host=localhost;dbname=mp1', 'root', '');

            // set the PDO error mode to exception

            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // sql to delete a record

            $nomrecup = $_POST['nom'];
            $prenomrecup = $_POST['prenom'];
            $pseudoRecup = $_POST['pseudo'];
            $mdpRecup = $_POST['mdp'];
            $emailRecup = $_POST['email'];


            $pdst = "INSERT INTO personnage(nom, prenom, pseudo, mdp, email ) VALUES ('$nomrecup','$prenomrecup','$pseudoRecup',' $mdpRecup','$emailRecup')";

            // use exec() because no results are returned

            $dbh->exec($pdst);
            echo "L'ajout a été effectuer";
            header('Location: interface.php');
            exit();

        } catch (PDOException $e) {
            echo $pdst . "<br>" . $e->getMessage();
        }
    }
}







