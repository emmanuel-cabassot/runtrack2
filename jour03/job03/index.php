<!-- Job 03
Créez une string nommée str et affectez y “I'm sorry Dave I'm afraid I can't
do that”. Créez algorithme qui parcourt cette chaîne et affiche uniquement
les voyelles. -->


<?php
$str = 'I\'m sorry Dave I\'m afraid I can\'t do that';
$voyelles = 'AaEeIiOoUuYy';

//Compte le nombre d'éléments dans $str
for ($nbstr=0; isset($str[$nbstr])  ; $nbstr++) { 
}

//Compte le nombre d'éléments dans $voyelles
for ($nbvoyelles=0; isset($voyelles[$nbvoyelles]) ; $nbvoyelles++) { 
}

//Affiche les voyelles de $str
for ($tourstr=0; $tourstr < $nbstr ; $tourstr++) 
{    
    for ($tourvoyelles=0; $tourvoyelles < $nbvoyelles ; $tourvoyelles++) 
    { 
        if ($voyelles[$tourvoyelles] === $str[$tourstr]) {
            echo $str[$tourstr];
        break;
        }
    }
}
?>