
<?php

$ime = $_POST["ime"];


if (!isset ($ime) ||     empty ($ime)){
    die ("nesto nije dobro");
    
};


if (session_status() === PHP_SESSION_NONE) {
    session_start();
   
}

$_SESSION ["ime"] = $ime;

header("Location: prikaz.php");


?>
