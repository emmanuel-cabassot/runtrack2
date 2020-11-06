<!-- Job 02
Créez une fonction nommée “bonjour”. Cette fonction prend en paramètre
un booléen nommé “jour”. Si le paramètre “jour” vaut true, la fonction doit
afficher “Bonjour”, si “jour” vaut false, la fonction doit afficher “Bonsoir”. -->

<?php
$jour = true;
function bonjour($jour){
    if ($jour) {
        echo 'Bonjour';
        return;
    }
        echo'Bonsoir';
    
}

echo bonjour($jour);
?>