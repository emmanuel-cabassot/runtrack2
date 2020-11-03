<!-- Job 4
- Listez les nombres de 1 à 100 en mettant un retour à la ligne entre
chaque nombre (“<br />”) et en remplaçant certains nombres par un
mot selon les conditions suivantes :
- Si le nombre est un multiple de 3, affichez “Fizz”.
- Si le nombre est un multiple de 5, affichez “Buzz”.
- Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”. -->

<?php
for ($nbr=1; $nbr <= 100 ; $nbr++) 
{ 
    if ($nbr%3==0 AND $nbr%5==0) 
    {
        echo 'FizzBuzz <br>';
    }
    elseif ($nbr%3==0) 
    {
        echo 'Fizz <br>';
    }
    elseif ($nbr%5==0) 
    {
        echo 'Buzz <br>';
    }
    else {
        echo $nbr. '<br>';
    }
    
    
        
}

?>