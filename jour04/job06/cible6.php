<?php

$de = $_GET['nombre'];
if ($de%2==0) {
    echo $de.' est un chiffre pair';
}
else {
    echo $de.' est un chiffre impair';
}
?>