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
        echo "Cena sa porezom je: $sve_sracunato RSD";
    } else {

        echo "Osnovna cena je: $ukupno RSD";
    }
} 



