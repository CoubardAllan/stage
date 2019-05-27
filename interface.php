<?php
require 'vendor/autoload.php';
use App\Session\session;
use App\requete;

/** @var session $session */
$session = session::getSession();
if($session->existe('utilisateur') === null){
    header('Location: seconnecter.php');
}
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
                            <a href="ajoutformulaire.php">>ajout d'un personnage<</a><h4>
                        </th>

                        <th scope="row">
                            <?php
                            if (isset($_SESSION['utilisateur'])) {
                                echo '<a href="src/deconnexion.php">se deconnecter<</a><h4></td>';
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