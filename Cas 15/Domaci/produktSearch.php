<?php



    if (!isset($_GET["ime"]) || empty($_GET["ime"])){


        die( "Niste uneli ime proizvoda" );

    }


    require_once "baza.php";

    $ime=  $_GET["ime"];

$rezultat = $baza -> query("select * from proizvodi where ime_proizvoda like '%$ime%'OR OPIS like '%$ime%'");


    if($rezultat->num_rows >= 1){
        echo "nasli smo "  .$rezultat->num_rows."  proizvoda";
    }else{
    echo "nismo nasli proizvode";}




//$rezultat = $baza -> query("select * from proizvodi where ime_proizvoda like '%$ime%'OR OPIS like '%$ime%'");
