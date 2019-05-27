<?php
require_once 'src/animaux.php';
require_once 'src/cheval.php';
require_once 'src/lion.php';
require_once 'src/zoo.php';
$cheval = new cheval('ko',false);
$lion = new lion('k',true);
$lion->parler();

echo '
';
$cheval->parler();
$zoo = new zoo( 2);
$zoo->crier();
$zoo->ajout($lion);
$zoo->crier();