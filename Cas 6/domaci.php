<?php

$ime = strtolower($_POST["ime"]);

$korisnici = ["toma", "petar", "marko"];

if(strlen($ime) < 3 ){
    echo "malo karaktera ";
    // var_dump($ime);
    die;
}



$korisnici = array_map('strtolower', $korisnici);

if (in_array($ime, $korisnici)){
    echo "Pronasli ste korisnika";
}else {
    echo "Nepostojeci korisnik";
} 


// var_dump($ime);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
</body>
</html>