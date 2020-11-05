<?php
    foreach ($_POST as $key => $value) 
    {
        $table[] = $key;
    }

//Compte le nombre d'arguments
    for ($tour=0; isset($table[$tour]) ; $tour++) 
    {    
    }

echo 'Il y a '.$tour.' argument(s) dans ce formulaire';

?>

