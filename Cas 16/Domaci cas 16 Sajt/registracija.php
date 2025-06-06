<?php

    error_reporting(E_ALL);
ini_set('display_errors', 1);

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"]) || empty($_POST["sifra"])) {
        die("Sva polja moraju biti popunjena!");
    }
    require_once "baza.php";

    $email = $_POST['email'];
    $sifra = password_hash($_POST['sifra'], PASSWORD_DEFAULT);

   
    $provera = $baza->prepare("SELECT id FROM korisnici WHERE email = ?");
    $provera->bind_param("s", $email);
    $provera->execute();
    $provera->store_result();

    if ($provera->num_rows > 0) {
        die("Korisnik sa ovom email adresom već postoji.");
    }
    $provera->close();

   
    $unos = $baza->prepare("INSERT INTO korisnici (email, sifra) VALUES (?, ?)");
    $unos->bind_param("ss", $email, $sifra);

    if ($unos->execute()) {
        echo "Registracija uspesna ulogujte se sada";
    } else {
        echo "Greška pri registraciji!";
    }

    $unos->close();
    $baza->close();
}
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Registracija</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="login-container">
    <form action="registracija.php" method="post" class="login-form">
        <h2>Registracija</h2>
        <input type="email" name="email" placeholder="Unesite vaš email">
        <input type="password" name="sifra" placeholder="Unesite vašu lozinku">
        <button type="submit">Registruj me</button>

        <h4><a href="login.php">Već imate nalog? Ulogujte se</a>      </h4>
    </form>
</div>
</body>
</html>
