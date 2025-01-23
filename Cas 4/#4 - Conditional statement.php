<?php

$ime = "Nadir";
$godine = 21;
$visina = 180;

if ($ime == "Nadir"){
    echo "Pozdrav Nadir <br>";
}else {
    echo "Niste Nadir";
};

if ($godine == 18){
    echo "Punoletni ste ";
};

if ($visina <  170){
    echo "niski ste ";
}else {
    echo "visoki ste <br>";
}
$godinaRodjenja = 2003;


if ($godinaRodjenja == 2000){
    echo "Imate 24 godine";

}else if ($godinaRodjenja == 2004){
    echo "imate 20 godina";
}else {                                     // Vezba
    $trenutnaGodina = date("Y");

     $tacnoGodina = $trenutnaGodina - $godinaRodjenja;


    echo "Imate $tacnoGodina godina <br>";
}


// vezba

$broj = 10;

$provera = $broj % 2 ;

if ($provera == 0 ){
    echo "broj je paran <br>";
    
}else {
    return "broj ne neparan";
};



$autimobili = [
    "Golf 1", "Golf 2", "Golf 3"
];

if (in_array("Golf 2" , $autimobili)){
    echo "Nasao si najbolje auto <br>";

}else {
    echo "nema";
}


$programer = true;


if ($programer){
    echo "vi ste programer<br>";
}else {
    echo "vi niste programer";
}




$godineZaPunoletstvo = 22;

if ($godineZaPunoletstvo  < 18){
    echo "vi ste maloletni";    
    
}else {
    echo "vi ste punoletni <br> ";
}



$polaganjeGodine = 10;
$kazne = false  ;


if ($polaganjeGodine >= 18){
    if ($kazne ==false){

        echo "Mozete polagati vozacki";
    }

else {
    echo "Imate kazne";
}}

else {
    echo "Nemate dovoljno godina";
}


