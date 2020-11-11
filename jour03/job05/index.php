<!-- Job 05
Créez une string nommée str et affectez y “On nest pas le meilleur quand
on le croit mais quand on le sait”. Créez un dictionnaire nommé dic qui a
comme keys “consonnes” et “voyelles”. Créez un algorithme qui parcourt,
compte et stocke le nombre d'occurrences de consonnes et de voyelles de
str. Affichez ces résultats dans un tableau html qui a comme thead
“Voyelles” et “Consonnes”. -->

<?php
$str = 'On n\'est pas le meilleur quand on le croit mais quand on le sait';
$dic = 
[
    'voyelles' => 'aAeEiIoOuUyY',
    
    'consonnes' => 'bBcCdDfFfFhHjJkKlLmMnNpPqQrRsStTvVwWxXzZ',0
    
];

//Nombre d'occurences dans $str
for ($nbstr=0; isset($str[$nbstr]) ; $nbstr++) { 
}

//Nombre d'occurences dans voyelles
for ($nbvoyelles=0; isset($dic['voyelles'][$nbvoyelles]) ; $nbvoyelles++) {    
}

//Nombre d'occurences dans consonnes
for ($nbconsonnes=0; isset($dic['consonnes'][$nbconsonnes]) ; $nbconsonnes++) { 
}


for ($tourstr=0; $tourstr < $nbstr ; $tourstr++) // Va aider a parcourir $str
{ 
    for ($tourvoyelles=0; $tourvoyelles < $nbvoyelles ; $tourvoyelles++) // Va aider a parcourir $voyelles
    { 
        if ($str[$tourstr] === $dic['voyelles'][$tourvoyelles]) // On compare
        {
            
            $nombrevoyelles[] = $str [$tourstr]; // On enregistre le resultat dans une nouvelle variable
            
        }
    }
    for ($tourconsonnes=0; $tourconsonnes < $nbconsonnes ; $tourconsonnes++) //Va aider a parcourir $consonnes
    { 
        if ($str[$tourstr] === $dic['consonnes'][$tourconsonnes])  // On Compare
        {
            
            $nombreconsonnes[] =  $str[$tourstr];  // On enregistre le resultat dans une nouvelle variable
            
        }
    }

}

//Nombre de consonnes dans $str
for ($nombretourconsonnes=0; isset($nombreconsonnes[$nombretourconsonnes]) ; $nombretourconsonnes++) {    
}

//Nombre de voyelles dans $str
for ($nombretourvoyelles=0; isset($nombrevoyelles[$nombretourvoyelles]) ; $nombretourvoyelles++) {    
}

echo ' Voici un algorithme qui va séparer les consonnes des voyelles et qui va les compter!!<br>
La phrase :<b>'.$str.'</b><br>
<table>
    <thead>
        <tr>
            <td>consonnes</td>
            <td>voyelles</td>
        </tr>
    </thead>
        <tr>
            <td>'.$nombretourconsonnes.'</td>
            <td>'.$nombretourvoyelles.'</td>
        </tr>
        <tr>
            <td>';
            foreach ($nombreconsonnes as  $valueconsonnes) {
                echo $valueconsonnes;
            }
            echo '</td>
            <td>';
            foreach ($nombrevoyelles as  $valuevoyelles) {
                echo $valuevoyelles;
            }
            echo'</td>
        </tr>
</table>
';

?>


