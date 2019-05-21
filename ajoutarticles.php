<?php

if ($_POST) {
    require_once 'src/requete.php';
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
                        <label>libelle</label>
                        <input type="text" class="form-control" name="libelle">
                    </div>
                    <div class="col-12 no-padding form-group">
                        <label>prix</label>
                        <input type="number" class="form-control" name="prix">
                    </div>
                    <div class="col-12 no-padding">
                        <button type="submit" class="btn btn-primary">save</button>
                    </div>
                    <div class="col-12 no-padding">
                        <a href="interface.php">>voir mes articles<</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>