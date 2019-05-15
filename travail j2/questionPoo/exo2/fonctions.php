<?php
function presentation($nom,$prenom,$age,$sexe){
    echo 'Bonjour je m\'appelle '.$nom.' '.$prenom.', j\'ai '.$age.' age et je suis un '.$sexe;
}
presentation('coubard','allan',20,'homme');

function isMajeur($age){
    if ($age < 18){
        echo 'false';
    }
    elseif ($age >= 18){
        echo 'true';
    }
}
echo '
';
isMajeur(17);
echo '
';
function trier($tab, $order){
    for ($i = 0; $i < count($tab); $i++){
        if ($order == 'asc') {
            sort( $tab);
            echo $tab[$i];
            echo ' ';
        } elseif ($order == 'desc') {
            rsort( $tab);
            echo $tab[$i];
            echo ' ';
        }
        else{
            echo 'mettre asc ou desc';
            echo ' ';
        }
    }
}
trier( [5,9,7,8,15,25,1,6], 'asc');
echo '
';
function exist($tab  ,$nombre){
    for($i=0; $i < count($tab) ;$i++) {
        if ($nombre == $tab[$i]) {
            echo ' 
            ';
            echo 'le nombre est present';
        }
    }


}
exist( [5,8,15,2,1,22,6],6 );

echo '
';
function truncate($chain){
    if ($chain >=  substr(50,0)){
        echo substr($chain, 0, 20);
    }
}
truncate("bonjour je m appelle allan et je fais des etudes en economie et en droit pour devenir dresseur pokemeon a mes heures perdu et enfin pour devenir le meilleur dresseur aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");


//$rest = substr("abcdef", -3, 1);
//echo $rest;
