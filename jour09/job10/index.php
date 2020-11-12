<!-- Job 10
En utilisant php, connectez-vous à la base de données “jour08”. A l’aide
d’une requête SQL, sélectionnez l’ensemble des informations des salles en
les triant par capacite croissant. Affichez le résultat de cette requête dans
un tableau html. La première ligne de votre tableau html doit contenir le
nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données. -->


<?php
$db = mysqli_connect("localhost", "root", "", "jour08");
$requete = "SELECT * FROM `salles` WHERE 1 ORDER BY capacite";
// Query pour $champs
$query = mysqli_query($db, $requete);
$champs = mysqli_fetch_assoc($query);

// Query pour $donnees
$query_donnees = mysqli_query($db, $requete);
$donnees = mysqli_fetch_all($query_donnees);

// Compte le nombre d'occurences dans $donnees[]
for ($ii=0; isset($donnees[$ii]); $ii++) { 
}

// Compte le nombre d'occurences dans $donnees[0][]
for ($nbi=0; isset($donnees[0][$nbi]) ; $nbi++) { 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <?php foreach ($champs as $key => $value) 
            {
            echo '<td>'.$key.'</td>';
            }?>
        </tr>
    </thead>
    <tbody>
            <?php for ($i=0; $i < $ii ; $i++) 
            { 
                echo '<tr>';
                for ($nb=0; $nb < $nbi ; $nb++) 
                { 
                    echo '<td>'.$donnees[$i][$nb].'</td>';
                }
                echo '</tr>';
            }?>
        </tbody>
    </table>  
</body>
</html>
<?php
mysqli_close($db);
?>