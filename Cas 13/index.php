<?php



   $baza = mysqli_connect("localhost", "root", "", "prvi_cas");

    if (mysqli_connect_error()) {
        die ("Ne mozemo da se povezemo");
    }

    mysqli_query($baza, "INSERT INTO korisnici (email, lozinka, datum_rodjenja) VALUES ('testizphpa@gmai.com', 'admin214314','1999-2-12' )");

    