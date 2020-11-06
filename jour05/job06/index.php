<!-- Job 06
Créez une fonction nommée “leetspeak”. Cette fonction prend en
paramètre une chaîne de caractères nommée “str”. Elle doit retourner la
chaine de caractères “str” convertie en leet speak. Cela signifie qu’elle doit
la modifier de sorte à ce que : les “A” deviennent des “4”, les “B” des “8”,
les “E” des “3”, les “G” des “6”, les “L” des “1”, les “S” des “5” et les “T” des
“7”. Cela est valable que l’on crie ou non (majuscules et minuscules). -->

<?php
//Les variables qui vont servir à la fonction
$str = 'Le Français sont des moutons !';
$remp = [];
$char = 0;
$nombre = 0;


// fonction qui change certaines lettres en chiffre
function leetspeak($str,$remp,$char, $nombre)
{
    //Nombre d'occurences dans $str
    for ($char=0; isset($str[$char]) ; $char++) { 
    }
 
    //La boucle qui va faire le travail
    for ($nombre=0; $nombre < $char ; $nombre++) 
    {   
            if ($str[$nombre]=='A' OR $str[$nombre]=='a') 
            {
                $remp[$nombre] = '4';
                echo $remp[$nombre];
            } 
            elseif ($str[$nombre]=='B' OR $str[$nombre]=='b') 
            {
                $remp[$nombre] = 8;
                echo $remp[$nombre];
            }
            elseif ($str[$nombre]=='E' OR $str[$nombre]=='e') 
            {
                $remp[$nombre] = 3;
                echo $remp[$nombre];
            }
            elseif ($str[$nombre]=='G' OR $str[$nombre]=='g') 
            {
                $remp[$nombre] = 6;
                echo $remp[$nombre];
            }
            elseif ($str[$nombre]=='L' OR $str[$nombre]=='l') 
            {
                $remp[$nombre] = 1;
                echo $remp[$nombre];
            }
            elseif ($str[$nombre]=='S' OR $str[$nombre]=='s') 
            {
                $remp[$nombre] = 5;
                echo $remp[$nombre];
            }
            elseif ($str[$nombre]=='T' OR $str[$nombre]=='t') 
            {
                $remp[$nombre] = 7;
                echo $remp[$nombre];
            }
            else 
            {
                $remp[$nombre] = $str[$nombre];
                echo $remp[$nombre];
            }      
    }  
}

//Appel de la fonction
 leetspeak($str,$remp,$char, $nombre);

?>