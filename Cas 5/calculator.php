<?php


// $broj_1 = $_GET["broj_1"];


// $broj_2 = $_GET["broj_2"];

// $rezultat = $broj_1 + $broj_2;
// $rezultat2 = $broj_1 - $broj_2;

// echo $rezultat;



/// vezba 




if(isset($_GET ['broj_1'], $_GET['broj_2'], $_GET['operacija'])){

    
    $broj1 = $_GET['broj_1'];
    $broj2 = $_GET['broj_2'];
    $operacija = $_GET['operacija'];
 
    switch ($operacija) {
        case 'plus':
            $rezultat = $broj1 + $broj2;
            break;
        case 'minus':
            $rezultat = $broj1 - $broj2;
            break;
        default:
            echo "Nepoznata operacija.";
            exit;
    }

    echo "Rezultat je: " . $rezultat;
} 



?>



<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Izracunato  </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
</body>
</html>

