<?php
?>
<!DOCTYPE html>
<html class="thead-dark">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="row margin-top">

        <div class="col-8 mx-auto">

            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">libelle</th>
                        <th scope="col">Prix</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        require_once 'src/requete.php';
                        require_once 'src/connexion.php';
                        require_once 'src/articles.php';
                        $query = new requete();
                        $afficher = $query->selection('articles');
                        foreach ($afficher as $row) {
                            echo '<tr>';
                            echo '<th scope="row">'.$row->getLibelle().'</th>';
                            echo '<td>' .$row->getPrix(). '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="ajoutformulaire.php">>ajout d'un articles<</a><h4> <br><br><br><br>
</div>

</body>


</html>