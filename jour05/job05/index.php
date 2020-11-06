<!-- Job 05
Créez une fonction nommée “occurrences”. Cette fonction prend en
paramètre une chaîne de caractères nommée “str” et un caractère nommé
“char”. Elle doit retourner le nombre d'occurrences du caractère “char” dans
“str”. -->

<?php
$str = 'Les Français sont devenus des moutons';
$char = 0;

function occurences($str, $char){
    for ($char=0; isset($str[$char]) ; $char++) { 
    }
    return $char;
}

 $char = occurences($str, $char);
 echo $char;
?>