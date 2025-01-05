<?php 


// domaci 1

$ime = "admin";
$lozinka = "MojaSifraJeSigurna";


$malaSlova = strtolower($ime);




if($malaSlova === "admin"){
    if($lozinka === "MojaSifraJeSigurna"){
        echo "Dobrodoslosli<br>";

    }else{
        echo "nevazeca lozinka<br>";
    }
}else {
    echo "greska nije admin <br>";
};


/// domaci 2 



$trenutnoSati = 8;

if ($trenutnoSati >=5 && $trenutnoSati < 12){
    echo "Dobro Jutro";
}elseif ($trenutnoSati >=12 && $trenutnoSati < 20){
    echo "Dobar Dan";
}else {
    echo "Laku noc";
};

