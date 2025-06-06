<?php
require_once "baza.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST['ime'];
    $opis = $_POST['opis'];
    $cena = $_POST['cena'];
    $slika = $_POST['slika']; 
    $kolicina = $_POST['kolicina'];

    $unos = $baza->prepare("INSERT INTO proizvodi (ime_proizvoda, opis, cena, slika, kolicina) VALUES (?, ?, ?, ?, ?)");
    $unos->bind_param("ssdsi", $ime, $opis, $cena, $slika, $kolicina);

    if ($unos->execute()) {
        header("Location: proizvodi.php");
        exit();
    } else {
        echo "Greška pri unosu!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dodaj proizvod</title>
</head>
<body>
    <h2>Dodaj novi proizvod</h2>
    <form method="post">
        <label>Ime proizvoda: <input type="text" name="ime" required></label><br>
        <label>Opis: <input type="text" name="opis" required></label><br>
        <label>Cena: <input type="number" step="0.01" name="cena" required></label><br>
        <label>Slika: <input type="text" name="slika" required></label><br>
        <label>Količina: <input type="number" name="kolicina" required></label><br>
        <button type="submit">Dodaj</button>
    </form>
</body>
</html>
