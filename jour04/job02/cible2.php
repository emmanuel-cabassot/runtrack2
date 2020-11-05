<?php
//Entre les arguments de GET dans un tableau
foreach ($_GET as $key => $value) {
    $argument[] = $key;
}

foreach ($_GET as $key => $value) {
    $valeur[] = $value;
}


echo '
    <table>
        <thead>
            <tr>
                <td>Argument</td>
                <td>Valeurs</td>
            </tr>
        </thead>
        <tr>
            <td>'.$argument[0].'</td>
            <td>'.$valeur[0].'</td>
        </tr>
        <tr>
            <td>'.$argument[1].'</td>
            <td>'.$valeur[1].'</td>
        </tr>
        <tr>
            <td>'.$argument[2].'</td>
            <td>'.$valeur[2].'</td>
        </tr>
        <tr>
            <td>'.$argument[3].'</td>
            <td>'.$valeur[3].'</td>
        </tr>
    </table>
    ';
?>