<?php
require_once 'src/session.php';
$session = session::getSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row margin-top">
        <div style="margin:20px" class="col-6 mx-auto">
            <?php if($session->existe('utilisateur')) :?>
                un utilisateur
            <?php endif ?>
        </div>
        <div class="col-8 mx-auto">
            <div class="row">
                <?php require_once 'src/session.php'; ?>
                    <?php $session = session::getSession(); ?>
                            <?php if($session->existe('message')) :?>
                                <div class="alert alert-primary" role="alert">
                                    <?php echo $session->get('message'); ?>
                                    <?php  unset($_SESSION['message']); ?>
                                </div>
                            <?php endif ?>
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">nom</th>
                        <th scope="col">prenom</th>
                        <th scope="col">pseudo</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            require_once 'src/requete.php';
                            require_once 'src/connexion.php';
                            require_once 'src/personnage.php';
                            $query = new requete();
                            $afficher = $query->selection('personnage');
                             foreach ($afficher as $row) :
                            ?>
                                <tr>
                                <th scope="row"> <?php echo $row->getNom(); ?> </th>
                                <th> <?php echo $row->getPrenom(); ?> </th>
                                <td> <?php echo $row->getPseudo(); ?> </td>
                                </tr>
                             <?php endforeach ; ?>
                        </tr>
                                 <th scope="row">
                                 <a href="ajoutformulaire.php">>ajout d'un personnage<</a><h4> <br><br><br><br></td>
                                 </th>
                        <th scope="row">
                            <a href="seconnecter.php">>se connecter<</a><h4> <br><br><br><br></td>
                        </th>
                        <th scope="row">
                            <?php
                            require_once 'src/authentification.php';
                            if (isset($_SESSION['utilisateur'])) {
                                echo '<a href="src/deconnexion.php">se deconnecter<</a><h4> <br><br><br><br></td>';
                            } ?>
                        </th>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>