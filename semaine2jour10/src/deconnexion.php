<?php
require '../vendor/autoload.php';

use App\authentification;

$deco = new authentification();
$deco->deco();
die('ok');