<!-- Job 11
En utilisant php, connectez-vous à la base de données “jour08”. A l’aide
d’une requête SQL, sélectionnez la capacite moyenne des salles. Affichez
le résultat de cette requête dans un tableau html. La première ligne de
votre tableau html doit contenir le nom des champs. Les suivantes doivent
contenir les données présentes dans votre base de données. -->

<?php
$db = mysqli_connect("localhost", "root", "", "jour08");
$requete = "SELECT AVG(capacite) AS `capacite_moyenne` FROM `salles`";
// Query pour $champs
$query = mysqli_query($db, $requete);
$champs = mysqli_fetch_assoc($query);

// Query pour $donnees
$query_donnees = mysqli_query($db, $requete);
$donnees = mysqli_fetch_all($query_donnees);

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
        <tr>
            <td><?php  echo $donnees[0][0] ?></td>
        </tr>
    </tbody>
    </table>  
</body>
</html>
<?php
mysqli_close($db);
?>