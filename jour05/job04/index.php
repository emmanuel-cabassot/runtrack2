<!-- Job 04
Créez une fonction nommée “calcule” qui prend 3 paramètres : le premier,
“a”, est un nombre, le deuxième, “operation”, est un caractère contenant le
type d’opération (+, -, *, /, %), le troisième, “b”, est un nombre. La fonction
doit retourner le résultat de l’opération. -->

<?php
$a = 568;
$operation = '22';
$b = 874874;


function calcule($a, $operation, $b){
    if ($operation=='+') {
        return ($a + $b);
        
    }
    elseif ($operation == '-') {
        return ($a - $b);
        
    }
    elseif ($operation == '*') {
        return ($a * $b);
        
    }
    elseif ($operation == '/') {
        return($a / $b);
        
    }
    elseif ($operation == '%') {
        return($a % $b);
        
    }
    
    echo 'Votre opérateur n\'est pas bon !';
    
    
}

echo calcule($a, $operation, $b);

?>

