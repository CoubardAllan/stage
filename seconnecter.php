<?php

?>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style type="text/css">
        .login-form {
            width: 340px;
            margin: 50px auto;
        }
        .login-form form {
            margin-bottom: 15px;
            background: black;
            padding: 30px;
        }

    </style>
</head>
<body>
<div class="login-form">
    <?php
    if($_POST) {
        require_once 'src/login.php';
        $login = new login();
        $login->identification();
    }
    ?>
    <form action="seconnecter.php" method="post">
        <h2 class="text-center"></h2>
        <div class="form-group">
            <input type="text" name="compte" class="form-control" placeholder="nom du compte" >
        </div>
        <div class="form-group">
            <input type="password" name="mdp" class="form-control" placeholder="mot de passe" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">connexion</button>
        </div>
        <div class="form-group">
            <button><a href="interface.php">>voir mes personnages<</a></button>
        </div>
    </form>
</div>
</body>
</html>
</body>
</html>
