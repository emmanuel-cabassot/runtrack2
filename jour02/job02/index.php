<!-- 
- Afficher tous les nombres de 0 à 1337 SAUF 26, 37, 88, 1111 et
3233 en mettant un retour à la ligne entre chaque nombre (“<br />”).
 -->

 <?php
for ($nbre=0; $nbre <= 1337 ; $nbre++) {
    switch ($nbre) {
        case $nbre == 26:
            echo '<br>';
            break;
            
        case $nbre == 37:
            echo '<br>';
            break;

        case $nbre == 88:
            echo '<br>';
            break;
        
        case $nbre == 1111:
            echo '<br>';
            break;
        
        default:
            echo $nbre. '<br>';
            break;
    };
}

 ?>

