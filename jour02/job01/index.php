<!-- - Afficher tous les nombres compris entre 0 et 1337 en mettant un
retour à la ligne entre chaque nombre (“<br />”). Le nombre 42 doit
être en gras et souligné (<b><u>...). -->

<?php


for ($nbre=0; $nbre <= 1337; $nbre++) 
{ 
    if ($nbre == 42) 
    {
        echo '<bu><u>'.$nbre. '</bu></u><br>';   
     }
     else {
        echo $nbre .'<br>';
     }
    
}

?>