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
    <form action="" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        
        <label for="pass">Mot de passe </label>
        <input type="password" name="pass" id="pass" minlenght="5" placeholder="5 caractères" required>
        
        <label for="valider"></label>
        <input class="valider" type="submit" value="Valider" id="valider" value="ok">
    </form>
</body>
</html>
<?php
if (isset($_POST['nom']) AND isset($_POST['pass'])) {
    if ($_POST['nom'] === 'John' AND $_POST['pass'] === 'Rambo') {
        echo 'c\'est pas ma guerre';
    }
    else {
        echo 'Votre pire cauchemar';
    }
}
?>





