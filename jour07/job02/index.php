<?php

if(isset($_GET["reset"])){
    
    setcookie("nbvisites",0);
    header("location: index.php");
}
elseif(!isset($_COOKIE["nbvisites"])|| $_COOKIE["nbvisites"]==0){
    setcookie("nbvisites",1);  
}
else{
    setcookie("nbvisites",$_COOKIE["nbvisites"]+1);
}
echo $_COOKIE["nbvisites"];
   
?>
<form action="index.php" method="GET"><button name="reset">reset</button></form>