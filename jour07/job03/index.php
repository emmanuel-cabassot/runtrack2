<?php
session_start();
if(isset($_GET['reset']))
{
    session_destroy();
}
elseif(empty($_SESSION) && isset($_GET['submit']))
{
    $_SESSION['prenom-' . 1] = $_GET['prenom'];
}
elseif(isset($_GET['submit']))
{
    $i = count($_SESSION) + 1;
    $_SESSION['prenom-' . $i] = $_GET['prenom'];
}
foreach ($_SESSION as $key => $prenom)
{
    echo "Le prenom " . str_replace('prenom-', '', $key) . " est:" . $prenom . '<br/>';
}
?>
<form action="index.php" method="get">
    <input type="text" name="prenom">
    <button type="submit" name="submit" value="1">
        submit
    </button>
</form>
<form action="index.php" method="get">
    <button name="reset" value="1">
        reset
    </button>
</form>