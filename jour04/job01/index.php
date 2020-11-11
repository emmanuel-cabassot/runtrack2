<!-- Job 01
Développez un algorithme qui affiche le nombre d’arguments GET.
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
<div class="inscriptionlab">
    <form  action="" method="get">
        <label for="name">Nom</label>
        <input type="text" name="nom" id="name">
    
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom">
    
        <label for="date">Date de naissance</label>
        <input type="date" name="date" id="date">
        
        <label for="confirmaton"></label>
        <input type="submit" name="confirmer" id="confirmation" formaction="" inputmode="">
    </form>
</body>
</html>
<?php

// Met dans $table les informations de $_GET
foreach ($_GET as $key => $value) {
    $table[] = $key;  
}

//Compte le nombre d'arguments
for ($tour=0; isset($table[$tour]) ; $tour++) {    
}
echo $tour;
?>


