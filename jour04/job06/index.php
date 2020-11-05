<!-- Job 06
Faire un formulaire de type get avec un input text nommé “nombre” et un
bouton submit.
Après validation du formulaire, si la valeur entrée est un nombre pair,
afficher “Nombre pair”, si c’est un nombre impair, afficher “Nombre impair”. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="get">
            <label for="nombre">Pair ou impair </label>
            <input type="text" name="nombre" id="nombre" placeholder='ecrivez un nombre' required>
                    
            <label for="valider"></label>
            <input class="valider" type="submit" value="Valider" id="valider" formaction="cible6.php">
        </form>
</body>
</html>