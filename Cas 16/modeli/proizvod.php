<?php



    if (!isset($_GET['id']) || empty($_GET['id'])) {
        die("morate imati id");

    }


    require_once "baza.php";

   $idProizvoda= $_GET['id'];




    $rezultat =    $baza ->query("SELECT * FROM proizvodi WHERE id = $idProizvoda");


    if ($rezultat -> num_rows == 0 ) {
    die ("nema proizvod");
    }
    $proizvod = $rezultat -> fetch_assoc();

    ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>

    <h2><?= $proizvod['ime_proizvoda']?></h2>
    <h3><?= $proizvod['opis']?></h3>
    <h3><?= $proizvod['cena']?></h3>
    <?php if ((int) $proizvod['kolicina']): ?>
        <p class="na-stanju">Ima na stanju (<?= $proizvod['kolicina'] ?> komada)</p>
    <?php else: ?>
        <p>Nema na stanju</p>
    <?php endif; ?>



</body>
</html>


