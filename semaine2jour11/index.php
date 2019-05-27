<?php

if (isset($_FILES['submit'])){
    $tmp_name = $_FILES['fichier']['tmp_name'];
    move_uploaded_file($tmp_name, 'image/test.jpg');
    var_dump($tmp_name);
}

?>
<!DOCTYPE html>
<html lang="fr">
<body>
    <form action="" method="post" enctype="multipart/form-data">
        votre fichier a télécharger
        <input type="file" name="fichier" id="fichieratel">
        <input type="submit" value="Upload Image" name="submit">
    </form>


</body>
</html>
