<?php

$ime = "Nadir";

$ime = str_replace("a", "A", $ime);
echo $ime;


function pozdraviKorisnika(){
    echo " Pozdrav";

}

pozdraviKorisnika();


function saberiDvaBroja($broj1, $broj2)
{
    if ($broj1 == 0 || $broj2 == 0) {
       echo "Ne mozete da saberate brojeve koji su 0";
       die;
    }

    $rezultat = $broj1 + $broj2;
        echo $rezultat;
    }
saberiDvaBroja(2, 20);

function ispisiBrojeve ($brojevi){
    echo "<br>$brojevi[2]";
}

ispisiBrojeve([1,2,3,4,5]);

$mojiBrojevi = [42,32,12,32,];

ispisiBrojeve($mojiBrojevi);



/// vezba

function DaLiJeBrojParan($broj){
    if ($broj == 0){
    echo "Ne mozete da izracunate parnost broja koji je 0";
        die;
    }
    else if ($broj % 2 == 0){
        echo "Da je paran broj";
    }else{
        echo "Neparan broj";
    }


}

DaLiJeBrojParan(242);





