<?php



    if(!isset($_POST['email'])|| empty($_POST['email'])) {


    die("Niste uneli Email!");

    };



    if(!isset($_POST['sifra'])|| empty($_POST['sifra'])) {


        die("Niste uneli sifru!");

    };


    $email = $_POST['email'];
    $password = $_POST['sifra'];


    require_once "baza.php";


    $baza->query("INSERT INTO korisnici (email, sifra) VALUES ('$email', '$password')");
