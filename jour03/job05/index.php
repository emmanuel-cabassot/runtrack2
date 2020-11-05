<!-- Job 05
Créez une string nommée str et affectez y “On n est pas le meilleur quand
on le croit mais quand on le sait”. Créez un dictionnaire nommé dic qui a
comme keys “consonnes” et “voyelles”. Créez un algorithme qui parcourt,
compte et stocke le nombre d'occurrences de consonnes et de voyelles de
str. Affichez ces résultats dans un tableau html qui a comme thead
“Voyelles” et “Consonnes”. -->


<?php
$str = 'On n est pas le meilleur quand on le croit mais quand on le sait';
$voyelles = 'aAeEiIoOuUyY';
$consonnes = 'bBcCdDfFfFhHjJkKlLmMnNpPqQrRsStTvVwWxXzZ';

$dic = [
    'voyelles' => [], 
    'consonnes' => [],
];

//Combien de caractères dans  $str?
for ($total=0; isset($str[$total]) ; $total++) 
{ 
    
}

//Combien de caractères dan $voyelles?
for ($total_v=0; isset($voyelles[$total_v]) ; $total_v++) 
{ 
    
}

//Combien de caractères dans $consonnes?
for ($total_c=0; isset($consonnes[$total_c]) ; $total_c++) 
{ 
    
}

//Boucles qui vont servir à ajouter des le tableau $dic les voyelles.
for ($nombre=0; $nombre < $total ; $nombre++) 
    { 
        for ($nbr=0; $nbr < $total_v; $nbr++) 
        { 
            if ($str[$nombre] == $voyelles[$nbr]) 
            {
            
            $dic['voyelles'][]=$str[$nombre];       //Insertion des voyelles dans le tableau.
            
            }  
           
        }
        for ($nbr=0; $nbr < $total_c; $nbr++) 
        { 
            if ($str[$nombre] == $consonnes[$nbr]) 
            {
            
            $dic['consonnes'][]=$str[$nombre];       //Insertion des consonnes dans le tableau.
            
            }  
           
        }
        
    }

//Combien de caractères dans $dic 'consonnes'?
for ($total_consonnes=0; isset($dic['consonnes'][$total_consonnes]) ; $total_consonnes++) 
{ 

}

//Combien de caractères dans $dic 'voyelles'?
for ($total_voyelles=0; isset($dic['voyelles'][$total_voyelles]) ; $total_voyelles++) 
{ 
    
}

// TABLEAU
echo '
<table>
    <thead>
        <tr>
            <td>consonnes</td>
            <td>voyelles</td>
        </tr>
    </thead>
        <tr>
            <td>'.$total_consonnes.'</td>
            <td>'.$total_voyelles.'</td>
        </tr>
</table>
';

?>


