<!-- Job 05
Faire un formulaire de connexion de type POST (se demander, pourquoi
pas GET ?) ayant deux input nommés username et password.
Après validation du formulaire, si le username est “John” et le password
est “Rambo” afficher : “C’est pas ma guerre” sinon afficher “Votre pire
cauchemar”. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<body>   
            <form class="connexion" action="cible5.php" method="post">
                  <label for="nom">Nom</label>
                  <input type="text" name="nom" id="nom">
                    
                  <label for="pass">Mot de passe </label>
                  <input type="password" name="pass" id="pass" minlenght="5" placeholder="5 caractères" required>
                    
                  <label for="valider"></label>
                  <input class="valider" type="submit" value="Valider" id="valider" formaction="cible5.php">
            </form>
</body>
</html>





