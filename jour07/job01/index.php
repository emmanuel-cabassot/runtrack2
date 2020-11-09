
<?php
session_start();
if(isset($_GET["reset"])){
    session_destroy();
    $_SESSION["nbvisites"]=0;
    header("location: index.php");
}
elseif(!isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"]=1;
}
else{
    $_SESSION["nbvisites"] +=1;
}
echo $_SESSION["nbvisites"];
   
?>
<form action="index.php" method="GET">
<button name="reset">reset</button></form>




