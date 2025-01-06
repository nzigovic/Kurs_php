<?php



if (isset($_GET['input-box'], $_GET['operacija'])) {
    $input_box = $_GET['input-box']; 
    $operacija = $_GET['operacija'];

   

    
    switch ($operacija) {
        case 'hrana':
            $ukupno = $input_box + 150;
            echo "Cena je $ukupno RSD";
            break;

        case 'komp-oprema':
            $ukupno = $input_box + 250;
            echo "Sve košta $ukupno RSD";
            break;

        
    }
} else {
    echo "Popunite sva polja.";
}



// var_dump($_GET);
