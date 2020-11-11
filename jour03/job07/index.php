<!-- Job 07
Créer une chaîne str qui contient “Certaines choses changent, et d'autres
ne changeront jamais.”. Créer un algorithme qui parcourt cette string en
remplaçant le premier caractère par le deuxième, le deuxième par le
troisième etc.. et le dernier par le premier. -->

<?php
$str = 'Certaines choses changent, et d\'autres ne changeront jamais.';

//nombre d'occurences dans $str
for ($nb_str=0; isset($str[$nb_str]) ; $nb_str++) {    
}
$nb_str = $nb_str - 1;


//Boucle qui va décalée $str
for ($tour_str=0; $tour_str <= $nb_str ; $tour_str++) 
{ 
    if ($tour_str === $nb_str) 
    {
        $nb_str;
        $decale_str[] = $str[0];    
    }
    else 
    {
        $decale_str[] = $str[$tour_str + 1] ;
    }
        
}

for ($i=0; $i <= $nb_str ; $i++) { 
    echo $decale_str[$i];
}
?>









