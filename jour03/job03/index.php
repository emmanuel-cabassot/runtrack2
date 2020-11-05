<!-- Job 03
Créez une string nommée str et affectez y “I'm sorry Dave I'm afraid I can't
do that”. Créez un algorithme qui parcourt cette chaîne et affiche
uniquement les voyelles. -->
<?php
$str = 'I\'m sorry Dave I\'m afraid I can\'t do that';
$alpha = 'aAeEiIoOuUyY';
$total=strlen($str);

$tot=strlen($alpha);
for ($nombre=0; $nombre < $total ; $nombre++) 
    { 
        for ($nbr=0; $nbr < $tot; $nbr++) 
        { 
            if ($str[$nombre] == $alpha[$nbr]) 
            {
             echo $str[$nombre];
            }   
        }
        
    }
  
    


?>