<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <table class="table table-bordered table-blue">
        <thead>
        <tr>
            <span class="border">
                <th scope="col"><center>personnage</center></th>
            </span>
        </tr>
        </thead>
    </table>
</head>
<body>
<table class="table table-bordered table-blue">
    <thead>
    <tr>
        <th scope="col"><center>nom</center></th>
        <th scope="col"><center>prenom</center></th>
        <th scope="col"><center>pseudo</center></th>
    </tr>
    </thead>
    <thead>
    <tbody>
    <tr>
        <?php
        require_once 'src/connexion.php';
        require_once 'src/requete.php';
        require_once 'src/personnage.php';
        $query = new requete();
        $afficher = $query->recup('personnage');
        foreach ($afficher as $row){
            echo '<td style="border : 1px solid black">'. $row->getPrenom() .'</td>';
            echo '<td style="border : 1px solid red">'.   $row->getNom() .'</td>';
            echo '<td style="border : 1px solid green">'. $row->getPseudo() .'</td>';
            echo '<tr></tr>';
        }

        ?>
    </tr>
    </tbody>
    </thead>
</table>

</body>


</html>