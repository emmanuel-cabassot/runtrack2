<!-- Job 02
Développer un algorithme qui affiche dans un tableau HTML l’ensemble
des arguments GET et les valeurs associées. Il doit y avoir deux colonnes :
argument et valeur.
Tips : Pour tester, créez un formulaire html de type GET avec différents
input. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
                <form  action="cible2.php" method="get">
                    
                        <label for="name">Nom</label>
                        <input type="text" name="nom" id="name">
                    
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" id="prenom">
                    
                        <label for="date">Date de naissance</label>
                        <input type="date" name="date" id="date">
                        <label for="confirmaton"></label>
                        <input type="submit" name="confirmer" id="confirmation" formaction="cible2.php" inputmode="">
                </form>
</body>
</html>
