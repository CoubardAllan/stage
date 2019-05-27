<?php
class connexion{

    public function __construct()
    {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=allan', 'root', '');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connexion réussie";
        } catch (PDOException $e) {
            echo  "<\br>" . $e->getMessage();
        }
    }
}
$connexion = new connexion();
$connexion = new connexion();

?>

