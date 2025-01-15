<?php


$automobili = ["Audi", "Bmw", "Mercedes"];


foreach ($automobili as $automobil){

    if($automobil == "Bmw"){
        continue;
    }

    echo $automobil;
}


$brojevi = [22,53,36,46,13];









$brojevi_svi = [22,53,36,46,13];

foreach ($brojevi as $broj){
    if ($broj % 9 === 0){
        continue;
    }

    echo $broj . "\n";
}








$brojevi_svi = [22,53,36,46,13];



$rezultat = 0;


foreach ($brojevi_svi as $broj){
    $ostatak =  $broj % 9;
    if ( $ostatak == 0){
        continue;
    }
    $rezultat += $broj;
}

//echo $rezultat;




$zbir_brojeva = [22,53,36,46,13];

$rezultat_2 = 0;

$rezultat_2 +=  array_sum($zbir_brojeva);

//echo $rezultat_2;




//// vezba

for ($i = 0; $i < 50; $i++){
//    echo " $i" ;

    if ($i % 5 === 0 ){
        continue;


    }
        echo " $i" ;
}


$godine = 0;

while ($godine < 18){
    echo " $godine";
    $godine++;
};


