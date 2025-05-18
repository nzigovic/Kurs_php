<?php
        require_once "modeli/baza.php";

        $rezultat = $baza->query("SELECT * FROM proizvodi");
        $proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);







    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proizvodi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php foreach ($proizvodi as $proizvod): ?>
    <div class="card">
        <h2><?= $proizvod['ime_proizvoda'] ?></h2>
        <p><?= $proizvod['opis'] ?></p>
        <p class="cena">Cena: <?= $proizvod['cena'] ?> €</p>
        <?php if ((int) $proizvod['kolicina']): ?>
            <p class="na-stanju">Ima na stanju (<?= $proizvod['kolicina'] ?> komada)</p>
        <?php else: ?>
            <p>Nema na stanju</p>
        <?php endif; ?>


        <a href="modeli/proizvod.php?id=<?=$proizvod['id'] ?>">Pogledaj proizvod</a>
    </div>
<?php endforeach; ?>
</body>
</html>