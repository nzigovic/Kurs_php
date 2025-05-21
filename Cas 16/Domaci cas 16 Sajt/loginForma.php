<?php
if (!isset($_POST["email"]) || empty($_POST["email"])) {
    die("Polje email nije popunjeno");
}

if (!isset($_POST["sifra"]) || empty($_POST["sifra"])) {
    die("Polje šifra nije popunjeno");
}

require_once "baza.php";

$email = $_POST['email'];
$sifra = $_POST['sifra'];

$provera = $baza->prepare("SELECT sifra FROM korisnici WHERE email = ?");
$provera->bind_param("s", $email);
$provera->execute();
$rezultat = $provera->get_result();

if ($rezultat->num_rows === 1) {
    $korisnik = $rezultat->fetch_assoc();
    $hashIzBaze = $korisnik['sifra'];

    if (password_verify($sifra, $hashIzBaze)) {
        echo "Dobrodošli!";
    } else {
        echo "Pogrešna lozinka.";
    }
} else {
    echo "Korisnik ne postoji..";
}

$provera->close();
$baza->close();

