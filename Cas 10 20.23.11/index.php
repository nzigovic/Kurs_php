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

