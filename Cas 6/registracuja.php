<?php


$prosledjena_lozinka = $_POST["lozinka"];
$prosledjeno_ime =$_POST["ime"];



if ($prosledjeno_ime == false){
    if(empty($prosledjeno_ime || $prosledjena_lozinka)){
        echo "prazna polja";
        die;

    }
    echo "ime nije prosledjeno";
    die;

    


}




else if ($prosledjena_lozinka == false){
        echo "Lozinka nije prosledjena";
        die;

}else {
    echo "Uspesno prosledjeno";
}


// var_dump($_POST);



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vasa registracija</title>
</head>
</html>

