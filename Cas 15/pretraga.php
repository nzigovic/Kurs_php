<?php


    require_once "baza.php";


//    $email = $_POST['email'];

//    $provera = $baza->prepare("SELECT * FROM korisnici WHERE email = ?");
//    $provera->bind_param("s", $email);
//    $provera->execute();
//    $provera->store_result();
//
//    if ($provera-> num_rows > 0) {
//    echo "Nasli smo korisnika u bazi!";
//        $provera->close();
//        $baza->close();
//    exit;
//
//
//    }  else {
//      echo "Korisnik nije pronadjen!";}
//
//    $provera ->close();



function ProverIKorisnikaSaSlovom($baza, $domen)
{

    $upit = $pdo->prepare("SELECT COUNT (*) FROM korisnici WHERE email LIKE ? ");
    $pattent = "%". $domen;
    $upit->bind_param("s", $pattern);
    $upit->execute();
    $upit->bind_result($broj);
    $upit->fetch();
    $upit->close();


    return $broj > 0;
};

if (ProverIKorisnikaSaSlovom($baza , '@gmail.com')

{
}

)