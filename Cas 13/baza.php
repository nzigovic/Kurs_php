<?php

$baza = mysqli_connect("localhost", "root", "", "prvi_cas");

if (mysqli_connect_error()) {
    die ("Ne mozemo da se povezemo");
};


$imeProizvoda = $_POST['ime'];
$opis = $_POST['opis'];
$cena = $_POST['cena'];
$dan_nabavke = $_POST['datum'];
$kolicina = $_POST['kolicina'];

$baza -> query("INSERT INTO proizvodi (ime, opis, cena, dan_nabavke, kolicina)   VALUES ('$ime', '$opis', $cena, '$dan_nabavke', $kolicina)");

//if ($baza->query($query)) {
//    echo "Uspešno dodat proizvod.";
//} else {
//    echo "Greška: " . $baza->error;
//}

