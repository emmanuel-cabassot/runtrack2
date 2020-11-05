<!-- Job 03
Développez un algorithme qui affiche le nombre d’arguments POST.
Tips : Pour tester, créez un formulaire html de type POST avec différents
input. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
                <form  action="cible3.php" method="post">
                    
                        <label for="name">Nom</label>
                        <input type="text" name="nom" id="name">
                    
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" id="prenom">
                    
                        <label for="date">Date de naissance</label>
                        <input type="date" name="date" id="date">
                        <label for="confirmaton"></label>
                        <input type="submit" name="confirmer" id="confirmation" formaction="cible3.php" inputmode="">
                </form>


</body>
</html>

