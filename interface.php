<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row margin-top">
        <div class="col-8 mx-auto">
            <div class="row">
                <?php require_once 'src/session.php'; ?>
                <?php if (!empty($_SESSION['message'])) : ?>
                    <?php $session = new session(); ?>
                    <?php $session->existe('message') ?>
                        <div class="alert alert-primary" role="alert">
                            <?php echo $session->get('message'); ?>
                            <?php unset($_SESSION['message']); ?>
                        </div>
                <?php endif ?>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">libelle</th>
                        <th scope="col">prix</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            require_once 'src/requete.php';
                            require_once 'src/connexion.php';
                            require_once 'src/articles.php';
                            $query = new requete();
                            $afficher = $query->selection('articles')?>
                            <?php foreach ($afficher as $row) :
                            $classRow = '';
                                if (($row->getPrix()) < 5)
                                {
                                    $classRow = 'text-danger';
                                }
                                elseif (($row->getPrix() >= 5) && ($row->getPrix() < 15))
                                {
                                    $classRow = 'text-warning';
                                } ?>
                                <tr>
                                <th scope="row"> <?php echo $row->getLibelle() ?> </th>
                                <td class=<?php echo $classRow ?>> <?php echo $row->getPrix() ?> </td>
                                </tr>
                             <?php endforeach  ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="ajoutarticles.php">>ajout d'un articles<</a><h4> <br><br><br><br>
</div>
</body>
</html>