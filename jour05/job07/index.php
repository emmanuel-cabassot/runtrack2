<!-- Job 07
Créez un formulaire qui contient un input nommé “str” de type text, une liste
déroulante (select) nommée “fonction” et un bouton submit. Lorsque vous
validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option choisie dans la liste déroulante. Les choix possibles
sont :
- “gras” : une fonction qui prend en paramètre “str”. Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.
- “cesar” : une fonction qui prend en paramètre “str” et un nombre
“decalage” (qui vaut 2 par défaut). La chaine est affichée en décalant
chaque caractère d’un nombre égal à “decalage”.
ex : si decalage vaut 1, e devient f. Si décalage vaut 3, z devient c.
- “plateforme”, une fonction qui prend en paramètre “str”. Elle écrit “str”
en ajoutant un “_” aux mots finissant par “me”. -->

<form  action="cible7.php" method="POST">
    <label for="str">Nom</label>
    <input type="text" name="str" id="str" required>

    <label for="etude">Diplome</label>
    <select name="études" id="etude">
            <option value="gras">Niveau d'étude</option>
            <option value="cesar">BEP</option>
            <option value="plalteforme">BAC</option>
    </select>
    </label>

    <label for="confirmer"></label>
    <input type="submit" name="confirmer" id="confirmer" required> 
</form>

<?php


?>