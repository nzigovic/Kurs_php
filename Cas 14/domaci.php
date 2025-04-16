<?php



    if(!isset($_POST['email'])|| empty($_POST['email'])) {


    die("Niste uneli Email!");

    };



    if(!isset($_POST['sifra'])|| empty($_POST['sifra'])) {


        die("Niste uneli sifru!");

    };


    $email = $_POST['email'];

    $password = password_hash($_POST['sifra'], PASSWORD_BCRYPT);
    var_dump($password); exit();



    require_once "baza.php";


    $baza->query("INSERT INTO korisnici (email, sifra) VALUES ('$email', '$password')");



    echo "test";