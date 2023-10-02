<?php
$salaires = array(1500,4500,2200,1500,3300,1800,1700,2000,4000);
sort($salaires);
$n = count($salaires);

function mediane($tab){
    $n = count($tab);
    if(($n % 2) == 0){
        $resultat = $tab[4] + $tab[3];
        $resultat = $resultat /2;
        return $resultat;
    }
    else{
        $resultat = $tab[$n-1/2];
        return $resultat;
    }
}



function moyenne($tab){
    $n = count($tab);
    $moyenne =0;
    $result = 0;
    for($i = 0; $i<$n ; $i++){
        $moyenne = $tab[$i] + $moyenne;
        $result = $moyenne /$n ;
        return $result;

    }
}
echo 'la mediane est de '. mediane($salaires);
echo 'la moyenne est de '. moyenne($salaires);
?>
