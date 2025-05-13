<?php



if (!isset($_POST["opis"]) || empty($_POST["opis"])){


    die( "Niste uneli opis");

}
if (!isset($_POST["ime_proizvoda"]) || empty($_POST["ime_proizvoda"])){


    die( "Niste uneli ime_proizvoda");

}
if (!isset($_POST["cena"]) || empty($_POST["cena"])){


    die( "Niste uneli cena");

}
if (!isset($_POST["slika"]) || empty($_POST["slika"])){


    die( "Niste uneli slika");

}
if (!isset($_POST["kolicina"]) || empty($_POST["kolicina"])) {


    die("Niste uneli kolicina");

}


require_once "baza.php";
    $ime = $_POST["ime_proizvoda"];
    $cena = $_POST["cena"];
    $slika = $_POST["slika"];
    $kolicina = $_POST["kolicina"];
    $opis = $_POST["opis"];





$q = "INSERT INTO proizvodi (ime_proizvoda, opis, cena, slika, kolicina)  VALUES ('$ime', '$opis', '$cena', '$slika', '$kolicina')";
        $baza->query($q);


