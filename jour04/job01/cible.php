<?php
//Entrée les valeurs de GET dans un tableau
foreach ($_GET as $key => $value) {
    $table[] = $key;
    ;
}

//Compte le nombre d'arguments
for ($tour=0; isset($table[$tour]) ; $tour++) {    
}
echo $tour;
?>