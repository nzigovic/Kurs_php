<?php



    if(!isset($_POST["email"]) || empty($_POST["email"])){
        die("unesite email");
    }

    if(!isset($_POST["sifra"]) || empty($_POST["sifra"])){
        die("unesite sifra");
    }


    require_once "baza.php";

    $email = $_POST["email"];
    $sifra = $_POST["sifra"];

        $rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$email'");

        if($rezultat->num_rows == 1) {
           $korisnik = $rezultat->fetch_assoc();
        var_dump($korisnik);
        }
      else{
        echo "Korisnik ne postoji";
      }
