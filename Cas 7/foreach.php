<?php


$automobili = ["Audi", "Bmw", "Mercedes"];


foreach ($automobili as $automobil){

    if($automobil == "Bmw"){
        continue;
    }

    echo $automobil;
}


$brojevi = [22,53,36,46,13];


foreach ($brojevi as $broj){
    if ($broj % 9 === 0){
        continue;
    }

    echo $broj . "\n";
}
