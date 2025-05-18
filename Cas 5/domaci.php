<?php



if (isset($_GET['input-box'], $_GET['operacija'])) {
    $input_box = $_GET['input-box']; 
    $operacija = $_GET['operacija'];


    $ukupno = null;

    switch ($operacija) {
        case 'hrana':
            $ukupno = $input_box + 150;
            break;

        case 'komp-oprema':
            $ukupno = $input_box + 250;
            break;

       
    }

    $procenat = 10;

    if (isset($_GET['check'])) {

        $sve_sracunato = $ukupno + ($ukupno * $procenat / 100);
        // echo "Cena sa porezom je: $sve_sracunato RSD";
    } else {

        echo "Osnovna cena je: $ukupno RSD";
    }
} 

/// ovo treba Toma da objasni kada se koristi a kada ne ternarni operator prednosti/mane ///

$prikazana_cena = $sve_sracunato ?? ($ukupno ?? "cena nije dostupna");    //ternarni operator (ternary operator) ili uslovni operator (conditional operator)


// if (isset($sve_sracunato)) {

//     $prikazana_cena = $sve_sracunato;
// } elseif (isset($ukupno)) {

//     $prikazana_cena = $ukupno;
// } else {
//     $prikazana_cena = "cena nije dostupna";
// }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="result-container">
    <h2>Rezultat</h2>
    <p>Ukupna cena: <span class="result-value"><?php echo $prikazana_cena; ?> RSD</span></p>
    <p>Kategorija: <span class="result-category"><?php echo $operacija; ?></span></p>
</div>
    
</body>
</html>