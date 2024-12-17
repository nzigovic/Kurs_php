<?php


$osoba = [
    "Ime" => "Nadir",
    "Prezime" => "Zigovic",
    "godine" => 21
];


echo $osoba ["Ime"];
echo $osoba ["Prezime"]."<br>";


// Vezba 


$automobili = [
    "marka" => "Bmw",
    "godiste" => "2010"
];


echo "Pogledaj automobil marke {$automobili["marka"]}, proizveden {$automobili["godiste"]} godine";