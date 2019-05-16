<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <table class="table table-bordered table-dark">
        <thead>
        <tr>
            <span class="border">
            <th scope="col"><center>mes personnage</center></th>
            </span>
        </tr>
        </thead>
    </table>
</head>
<body >
<table class="table table-bordered table-dark">
    <thead>
    <tr>

        <th scope="col"><center>nom</center></th>
        <th scope="col"><center>prenom</center></th>
        <th scope="col"><center>pseudo</center></th></th>
    </tr>
    </thead>
    <thead>
    <tbody>
    <tr>
        <?php
        require_once ('src/personnage.php');
        require_once ('src/connexionbdd.php');
        require_once ('src/personnagerequest.php');
        $query = new personnagerequest();
        $data = $query->recuperation('personnage');
        foreach ($data as $row) {
            echo '<td style="border : 1px solid black">'['nom'].'</td>';
            echo '<td style="border : 1px solid black">'['prenom'].'</td>';
            echo '<td style="border : 1px solid black">'['pseudo'].'</td>';

            }
        ?>
    </tr>
    </tbody>
    </thead>

</table>
    <form method="post" action="ajoutformulaire.php" >
        <a href="ajoutformulaire.php"> <input type="button" value="ajout d'un personnage"></a>

    </form>


</body>
</html>
