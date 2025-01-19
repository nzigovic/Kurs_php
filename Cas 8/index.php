<?php


//$automobili =[
//    "audi" => "a4",
//    "bmw" => "e60",
//];


//foreach ($automobili as $marka => $model) {
//    echo "Marka: " . $marka . "<br>  model: " . $model . "<br>";
//};



$automobili = [
    "Zastava" => [
        "model" => "Yugo 55",
        "godiste" => 1995
    ],

    "Renaut" =>[
        "model" => "Megane RS",
        "godiste" => 2014
    ],

    "Toyota" =>[
        "model" => "Rav4",
        "godiste" => 2019
    ]

];

    

foreach ($automobili as $marka => $auto) {

    $godiste = $auto["godiste"];
    $trenutaGodina = date("Y");

    $sracunateGodine = $trenutaGodina - $godiste;

    echo $sracunateGodine . " godine <br>";

    if ($sracunateGodine <=5){
        echo "Vas auto je novo";
    }


};



foreach ($automobili  as $model => $auto  ) {
    $godiste = $auto["godiste"];

    $trenutanDatum = date("Y");
    $godine = $trenutanDatum - $godiste;
    echo "Model: " . $model . "<br> Godine: " . $godine . "<br>";
    if ($godine <= 5 ){
        echo "Model auta je $model i auto nije star od 5 godina";
    }elseif ($godine > 5 && $godine <= 10){
        echo "vase auto je starije od 5 godina";
    }
};




