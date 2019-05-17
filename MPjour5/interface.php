<!DOCTYPE html>
<html class="thead-dark">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <table class="table table-bordered table-blue">
        <thead class="thead-dark">
        <tr>
            <span class="border">
                <th scope="col"><center>personnage</center></th>
            </span>
        </tr>
        </thead>
    </table>
</head>
<body>
<table class="table table-bordered table-black">
    <thead class="thead-dark">
    <tr>
        <div class="fixed-top">
        <th scope="col"><center>nom</center></th>
        <th scope="col"><center>prenom</center></th>
        <th scope="col"><center>pseudo</center></th>
        </div>
    </tr>
    </thead>
    <thead>
    <tbody>
    <tr>
        <thead class="thead-dark">

    <div class="invisible">

        <?php
        require_once 'src/connexion.php';
        require_once 'src/requete.php';
        require_once 'src/personnage.php';
        $query = new requete();
        $afficher = $query->recup('personnage');
        foreach ($afficher as $row){
            echo '<thead class="thead-dark">';
            echo '<td style="border : 1px solid black"><center>'. $row->getPrenom() .'</center></td>';
            echo '<td style="border : 1px solid black"><center>'.   $row->getNom() .'</center></td>';
            echo '<td style="border : 1px solid black"><center>'. $row->getPseudo() .'</center></td>';
            echo '<tr></tr>';
        }

        ?>

        </div>
    </thead>
    </tr>
    </tbody>
    </thead>
</table>
<form method="post" action="ajoutformulaire.php" >
    <a href="ajoutformulaire.php"> <input type="button" value="ajout d'un personnage"></a>

</form>

</body>


</html>