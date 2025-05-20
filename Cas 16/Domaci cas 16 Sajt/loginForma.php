<?php


    if (!isset($_POST["email"])  || empty($_POST["email"])){

        die("Polje email nije popunjeno");
    }

    if (!isset($_POST["sifra"])  || empty($_POST["sifra"])){

        die("Polje sifra nije popunjeno");
    }


    require_once "baza.php";

    $email =  $_POST['email'];
    $password = password_hash($_POST['sifra'], PASSWORD_DEFAULT);



    $provera = $baza -> prepare("select id from korisnici where email = ?");

    $provera -> bind_param( "s", $email);
    $provera -> execute();
    $provera -> store_result();


    if($provera ->num_rows > 0){
        echo "korisnik postoji";
        $provera -> close();
        $baza -> close();
        exit();
    }
    $provera -> close();
    eecho;ws