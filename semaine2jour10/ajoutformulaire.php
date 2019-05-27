<?php
require 'vendor/autoload.php';

use App\requete;


if ($_POST) {
    session_start();
    $insertion = new requete();
    $insertion->insertion($_POST);
}
?>
<!doctype HTML>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>formulaire</title>
</head>

<div class="container">

    <div class="row margin-top">

        <div class="col-4 mx-auto border border-dark">

            <form method="post" action="">
                <div class="row">

                    <div class="col-12 no-padding form-group">
                        <label>nom</label>
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="col-12 no-padding form-group">
                        <label>prenom</label>
                        <input type="text" class="form-control" name="prenom">
                    </div>
                    <div class="col-12 no-padding form-group">
                        <label>pseudo</label>
                        <input type="text" class="form-control" name="pseudo">
                    </div>
                    <div class="col-12 no-padding form-group">
                        <label>mdp</label>
                        <input type="text" class="form-control" name="mdp">
                    </div>
                    <div class="col-12 no-padding form-group">
                        <label>email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="col-12 no-padding">
                        <button type="submit" class="btn btn-primary">save</button>
                    </div>

                    <div class="col-12 no-padding">
                        <a href="interface.php">>voir mes personnages<</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>