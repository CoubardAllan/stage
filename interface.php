<?php
?>
<!DOCTYPE html>
<html class="thead-dark">
<head>
    <link rel="stylesheet" type="text/css" href="css.css">
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
                            $classRow = '';
                            if (($row->getPrix()) < 5)
                            {
                                $classRow = '<p class="text-danger" </p>';
                                echo '<tr><th scope="row">' . $row->getLibelle() . '</th><td>' .$classRow.$row->getPrix() . '</td></tr>';
                            }
                            elseif (($row->getPrix() >= 5) && ($row->getPrix() < 15))
                            {
                                $classRow = '<p class="text-warning" </p>';
                                echo '<tr><th scope="row">' . $row->getLibelle() . '</th><td>' .$classRow.$row->getPrix() . '</td></tr>';
                            }
                            elseif (($row->getPrix()) > 15)
                            {
                                $classRow = '<p class="text-success" </p>';
                                echo '<tr><th scope="row">' . $row->getLibelle() . '</th><td>' .$classRow.$row->getPrix() . '</td></tr>';
                            }
                        }
                        ?>
                        <p class= <?php echo $classRow; ?></p>
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