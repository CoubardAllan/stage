<?php

if (isset($_POST['submit'])){
    $tmp_name = $_FILES['fichier']['tmp_name'];
    var_dump($_FILES);
    if(move_uploaded_file($tmp_name, 'image/'. $_FILES['fichier']['name'])) {
        var_dump($tmp_name);
    }
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
