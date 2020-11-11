<!-- Job 06
Créez une chaîne de caractères str qui contient “Les choses que l'on
possede finissent par nous posseder.”. Créez un algorithme qui parcourt et
écrit cette chaine à l’envers. -->

<?php
$str = 'Les choses que l\'on possede finissent par nous posseder';

// Compte le nombre d'occurences dans $str
for ($nb_str=0; isset($str[$nb_str]) ; $nb_str++) { 
}

//Boucle qui met $str à l'envers
for ($envers_str = $nb_str - 1; $envers_str >= 0 ; $envers_str = $envers_str - 1) { 
    echo $str[$envers_str];
}
?>