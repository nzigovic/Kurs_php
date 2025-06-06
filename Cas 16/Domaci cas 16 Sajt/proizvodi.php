<?php
require_once "baza.php";

$upit = "SELECT * FROM proizvodi";
$rezultat = $baza->query($upit);
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Proizvodi</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        img {
            width: 100px;
        }
        .dodaj {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Lista proizvoda</h2>
    <table>
        <tr>
           
            <th>Ime</th>
            <th>Opis</th>
            <th>Cena (€)</th>
            <th>Slika</th>
            <th>Količina</th>
        </tr>
        <?php while($red = $rezultat->fetch_assoc()): ?>
        <tr>
            
            <td><?= $red['ime_proizvoda'] ?></td>
            <td><?= $red['opis'] ?></td>
            <td><?= $red['cena'] ?></td>
            <td><img src=<?= $red['slika'] ?>" alt="slika"></td>
            <td><?= $red['kolicina'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <div class="dodaj">
        <a href="dodaj_proizvod.php"><button>Dodaj proizvod</button></a>
    </div>
</body>
</html>
