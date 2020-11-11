<!-- Job 01
Créez un tableau contenant les nombre 200, 204, 173, 98, 171, 404, 459.
Parcourez ce tableau et affichez “X est paire<br />” ou “X est impaire<br
/>”, X étant un nombre de ce tableau. -->

<?php
$nombre = [200, 204, 173, 98, 171, 404, 459];

// Boucle qui va compter le nombre d'éléments dans le tableau $nombre
for ($i=0; isset($nombre[$i]) ; $i++)  {

}   

// Boucle qui permet de savoir si les chiffres dans le tableau $nombre sont pairs ou impairs
for ($tableau=0; $tableau < $i ; $tableau++) 
{   
    if ($nombre[$tableau] %2 === 0) 
    {
        echo $nombre[$tableau].' est pair <br>';
    }
    else {
        echo $nombre[$tableau].' est impair <br>';
    }
}
?>