<?php



   $baza = mysqli_connect("localhost", "root", "", "prvi_cas");

    if (mysqli_connect_error()) {
        die ("Ne mozemo da se povezemo");
    };





//    mysqli_query($baza, "INSERT INTO korisnici (email, lozinka, datum_rodjenja) VALUES ('testizphpa@gmai.com', 'admin214314','1999-2-12' )");

    $ime= "krompir";
    $opis = "beli kropmpir";
    $cena = 100;
    $dan_nabavke = "2021-02-12";
    $kolicina = 10;

    $baza -> query("INSERT INTO proizvodi (ime, opis, cena, dan_nabavke, kolicina)   VALUES ('$ime', '$opis', $cena, '$dan_nabavke', $kolicina)");


