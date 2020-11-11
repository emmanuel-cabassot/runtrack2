<!-- Afficher tous les nombres de 0 à 1337 SAUF 26, 37, 88, 1111 et
3233 en mettant un retour à la ligne entre chaque nombre (“<br />”). -->

<?php
for ($i=0; $i < 1337 ; $i++) { 
    if ($i === 26 OR $i === 37 OR $i === 88 OR $i === 1111) {
        echo '<br>';
    }
    else {
        echo $i.'<br>';
    }
}
?>