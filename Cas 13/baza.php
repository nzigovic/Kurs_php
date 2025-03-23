<?php

$baza = mysqli_connect("localhost", "root", "", "prvi_cas");

if (mysqli_connect_error()) {
    die ("Ne mozemo da se povezemo");
};


if(!isset($_POST['ime'])){
    die("Ne moze da se prosledi ");
};


$imeProizvoda = $_POST['ime'];
$opis = $_POST['opis'];
$cena = $_POST['cena'];
$dan_nabavke = $_POST['datum'];
$kolicina = $_POST['kolicina'];


$rezultat = $baza -> query("INSERT INTO proizvodi (ime, opis, cena, dan_nabavke, kolicina)   VALUES ('$imeProizvoda', '$opis', $cena, '$dan_nabavke', $kolicina)");

//if (!$baza->query($query))
//    echo "Uspešno dodat proizvod.";
//} else {
//    echo "Greška: " . $baza->error;
//}



