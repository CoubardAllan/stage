<?php
require_once 'src/connexion.php';
require_once 'src/request.php';
$connexion = new connexion();
echo '
';
$requete = new request();
$requete->select('articles');
echo'
';
$requete->delete('utilisateurs', 24);
$requete->insertion('categories','(5, manga)');
