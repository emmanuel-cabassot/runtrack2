<!-- Job 06
Créez une chaîne de caractères str qui contient “Les choses que l'on
possede finissent par nous posseder.”. Créez un algorithme qui parcourt et
écrit cette chaine à l’envers. -->

<?php
$str = 'Les choses que l\'on possede finissent par nous posseder.';
$envers = [];

//Combien de caractères dans  $str?
for ($total=0; isset($str[$total]) ; $total++) { 
    
}

// Prend la variable $str du dernier élément au premier et l'enregistre dans le tableau $envers
for ($total ; $total >= 0 ; $total = $total - 1) {  
    $envers[] = $str[$total];
}

//affiche le texte à l'envers
foreach ($envers as $enver) {
    echo $enver;
}


?>