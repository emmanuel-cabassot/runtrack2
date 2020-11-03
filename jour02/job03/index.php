<!-- - Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre
chaque nombre (“<br />”). Si le nombre est entre 0 et 20 : écrire en
italique (<i>), si le nombre est compris entre 25 et 50 : souligner.
Afficher “La Plateforme_” à la place de 42. -->

<?php
for ($nbr=0; $nbr <= 100 ; $nbr++) 
{ 
    while ($nbr <= 20) {
        echo '<i>' .$nbr. '</i><br>';
        $nbr = $nbr +1;
    }
    while ($nbr >= 21 and $nbr <= 50 ) 
    {
        if ($nbr == 42) 
        {
            echo 'La Plateforme_ <br>';
            $nbr = $nbr + 1;
        }
        else {
            echo '<u>'.$nbr. '</u><br>';
            $nbr = $nbr +1;
        }    
    }
    echo $nbr. '<br>';


}
?>