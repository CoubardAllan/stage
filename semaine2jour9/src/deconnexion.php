<?php
class deconnexion{
    private $deconnexion;
    public function deco(){
        if (isset($_SESSION['utilisateur'])) {
            session_start();
            header('Location: seconnecter.php');
            unset($_SESSION['utilisateur']);
            exit();
        }else{
            header('location : interface.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
        <th scope="row">
            <?php $deconnexion = new deconnexion(); ?>
            <?php $deconnexion->deco(); ?>
            <a href="../seconnecter.php">>deconnexion<</a><br><br><br><br></td>
        </th>
</body>
</html>