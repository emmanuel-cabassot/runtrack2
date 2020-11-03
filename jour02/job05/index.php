<!-- Job 5
- Faire un algorithme qui affiche les nombres premiers jusqu’à 1000
en mettant un retour à la ligne entre chaque nombre (“<br />”). -->

<!-- MERCI POUR LE CASSE TETE!!! -->

<?php
echo '2 <br>';
    for ($nbr=1; $nbr < 1000 ; $nbr++) 
    {     
        
        $div=2;         
        while ($div < $nbr)
        {               
            if ($nbr%$div!==0 AND $nbr-1==$div) 
            {
                echo $nbr. '<br>';
                $div++;
            }
            elseif ($nbr%$div!==0) {
                $div++;
            }
            else {
            break;
            }
                        
        }
        
    }
?>