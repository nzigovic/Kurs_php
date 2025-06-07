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
       header("Location: proizvodi.php");
        exit();
    } else {
        echo "Pogrešna lozinka..";
    }
} else {
    echo "Korisnik ne postoji..";
}

$provera->close();
$baza->close();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>