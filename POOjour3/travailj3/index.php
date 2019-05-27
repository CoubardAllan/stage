<?php
require_once 'src/connexion.php';
require_once 'src/request.php';

$requete = new request();
echo'
';

$requete->delete('utilisateurs',38);
