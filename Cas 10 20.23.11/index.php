<?php


    function pomnoziDvaBroja($broj1, $broj2)
    {
        $rezultat =  $broj1 * $broj2;
        return $rezultat;
    }

   $pomnozeniBrojevi= pomnoziDvaBroja(6,6);

   echo $pomnozeniBrojevi;


function pomnoziDvaBroja($broj1, $broj2)
{
    $rezultat = $broj1 * $broj2;
    return $rezultat;
}

$pomnozeniBrojevi = pomnoziDvaBroja(6, 6);

//   echo $pomnozeniBrojevi;

/// vezba


function izracunajPopust($cena, $popust)
{
    $iznosPopusta = $cena * $popust / 100;

//        $popust = $popust / 100;
//        $popust = $cena - $popust;
//        $cena = $cena - $popust;
    return $iznosPopusta;
}

$izracunajPopust = izracunajPopust(1500, 10);
//    echo $izracunajPopust;


function kalkulatorPopusta($cena2, $popust2)
{


    return $cena2 * $popust2 / 100;

}

;
$popusti = [];

$brojevi = [250, 330, 1000, 2000, 5000];

foreach ($brojevi as $broj) {
    $popusti = kalkulatorPopusta($broj);
    array_push($popusti, $popusti)f
    }