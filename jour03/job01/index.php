<!-- Job 01
Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
Parcourez ce tableau et affichez “X est paire<br />” ou “X est impaire<br
/>”, X prenant tour à tour chacune des valeurs comprises dans ce tableau. -->

<?php
$nombres = [200, 204, 173, 98, 171, 404, 459];

foreach ($nombres as $nombre) {
    if ($nombre%2==0) {
        echo $nombre. ' est paire <br>';
    }
    else {
        echo $nombre. ' est impaire <br>';
    }
}

?>