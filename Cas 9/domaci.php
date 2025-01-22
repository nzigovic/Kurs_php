<?php

function izracunajPDV($cena)
{
    if (is_numeric($cena) == false){
    echo "Ne mozete da izracunate PDV zato sto nije broj ";
        die;
    }
    if ($cena < 1){
    echo "Ne mozete da izracunate PDV ";
    die;
    }
    else{
    $procenat = 22;

    $sveProracnato = $cena * $procenat / 100;
    $ukupno = $cena + $sveProracnato;
    echo "PDV iznosi $sveProracnato eur a cena je $cena eur Sve ukupno je $ukupno eur" ;

    }
}

//izracunajPDV("a");
izracunajPDV(21);



