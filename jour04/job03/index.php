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
    <form  action="" method="post">       
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

// Met dans $table les informations de $_POST
foreach ($_POST as $key => $value) {
    $table[] = $key;  
}

//Compte le nombre d'arguments
for ($tour=0; isset($table[$tour]) ; $tour++) {    
}
echo $tour;
?>

