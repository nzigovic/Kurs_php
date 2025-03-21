<?php

require_once "baza.php";

$rezultat= $baza -> query ("SELECT * FROM `korisnici`");

if ($rezultat->num_rows > 0) {
echo "Ukupno smo nasli korisnika "  .$rezultat ->num_rows;
    };

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>






</body>
</html>

