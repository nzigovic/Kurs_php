<?php
$poruka = "";

if (!isset($_POST["email"]) || empty($_POST["email"])) {
    $poruka = "Unesite email";
} elseif (!isset($_POST["sifra"]) || empty($_POST["sifra"])) {
    $poruka = "Unesite šifru";
} else {
    require_once "baza.php";

    $email = $_POST["email"];
    $sifra = $_POST["sifra"];

    $rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$email'");

    if ($rezultat->num_rows == 1) {
        $korisnik = $rezultat->fetch_assoc();
        $poruka = "Dobro došli, Admine!";
    } else {
        $poruka = "Korisnik ne postoji";
    }
}




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Login Status</title>
</head>
<body>
<div class="container">
    <?php if (!empty($poruka)): ?>
        <div class="poruka <?= ($poruka === 'Dobro došli, Admine!') ? 'uspeh' : 'greska' ?>">
            <?= htmlspecialchars($poruka) ?>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
