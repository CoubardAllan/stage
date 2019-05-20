<?php
require_once 'src/personnage.php';
require_once 'src/connexion.php';
require_once 'src/requete.php';
class ajout {
    public function __construct()
    {

        try {

            $dbh = new PDO('mysql:host=localhost;dbname=mp1', 'root', '');

            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $nomrecup = $_POST['nom'];
                $prenomrecup = $_POST['prenom'];
                $pseudoRecup = $_POST['pseudo'];
                $mdpRecup = $_POST['mdp'];
                $emailRecup = $_POST['email'];

                $pdst = "INSERT INTO personnage(id, nom, prenom, pseudo, mdp, email ) 
            VALUES (NULL ,'$nomrecup','$prenomrecup','$pseudoRecup',' $mdpRecup','$emailRecup')";

            $dbh->exec($pdst);
            echo "L'ajout a été effectuer";
            header('Location: interface.php');
            exit();

        } catch (PDOException $e) {
            echo $pdst . "<br>" . $e->getMessage();
        }
    }
}
?>
<!doctype HTML>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>formulaire</title>
</head>

<body>

<H1><center> Ajout d'un personnage </center></H1><br><br>

<a href="interface.php">>Retour<</a><h4> <br><br><br><br>

    <form method="post">
        <label>nom Personnage</label><input type="text" name="nom"><br>
        <label>Prenom Personnage</label> <input type="text" name="prenom"><br>
        <label>Pseudo</label><input type="text" name="pseudo"><br>
        <label>Mot de Passe</label> <input type="password" name="mdp">
        <br><br>
        <label>Email</label> <input type="longtext" name="email">
        <br><br><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
