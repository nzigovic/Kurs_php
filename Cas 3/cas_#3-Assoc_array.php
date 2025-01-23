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


echo "Pogledaj automobil marke {$automobili["marka"]}, proizveden {$automobili["godiste"]} godine <br>";


$osobe = [
    "Toma" => [
        "prezime" => "Nikolic",
        "godine" => 29,
        "programer" => true,
        "pravo_ime" => "Tomislav",
    ],
    "Petar" => [
        "prezime" => "Jovanovic",
        "godine" => 34,
        "programer" => false,
        "pravo_ime" => "Petar",
        "jmbg" => "472832147021",
    ],
];

$osobe["Jelena"] = [
    "prezime" => "Petrović",
    "godine" => 27,
    "programer" => false,           // ovako se dodaje assoc niz
    "pravo_ime" => "Jelena",
    "jmbg" => "2701994123456",
];


// print_r($osobe);



$clanovi = [
    "Clan 1" =>[
    "ime" => "Milan",
    "Prezime" => "Milanovic"]
];


$clanovi ["Clan 2"] = [
    "ime"=>"Marko",
    "Prezime" => "Markovic"
];

// var_dump($clanovi);



// unset($clanovi["Clan 1"]); // izbacivanje iz assoc niza 

// var_dump($clanovi);


// echo "Ja sa zovem{$clanovi['Clan 2']['ime']}";


$imena = array_keys($clanovi);

// var_dump($imena);   




foreach ($clanovi as $clan){
    echo $clan["Prezime"] . "<br>";
};

$trentanDatum = date("Y");

$godine = [

    [
        "godiste"=> 2003
    ]
    ];


    $sve = $trentanDatum - $godine[0]["godiste"];

    echo "Osoba ima $sve godina";


    