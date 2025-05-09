<?php


    require_once "baza.php";

/*
    $email = $_POST['email'];

    $provera = $baza->prepare("SELECT * FROM korisnici WHERE email = ?");
    $provera->bind_param("s", $email);
    $provera->execute();
    $provera->store_result();

    if ($provera-> num_rows > 0) {
    echo "Nasli smo korisnika u bazi!";
        $provera->close();
        $baza->close();
    exit;


    }  else {
      echo "Korisnik nije pronadjen!";}

    $provera ->close();*/


/*
function ProveriKorisnikaSaSlovom($baza, $domen)
{
    $upit = $baza->prepare("SELECT COUNT(*) FROM korisnici WHERE email LIKE ?");
    $pattern = "%" . $domen;
    $upit->bind_param("s", $pattern);
    $upit->execute();
    $upit->bind_result($broj);
    $upit->fetch();
    $upit->close();

    return $broj > 0;
};

if (ProveriKorisnikaSaSlovom($baza , '@gmail.com')) {
    echo "Korisnik postoji";
} else {
    echo "Korisnik ne postoji";
}*/



/*
function SviSaPosebinimImenom ($baza, $domen){

        $upit = $baza->prepare("SELECT * FROM korisnici WHERE email LIKE ?");
        $pattern = "%" . $domen;
        $upit->bind_param("s", $pattern);
        $upit->execute();
        $rezultat = $upit->get_result();

        $korisnici = [];

    while ($red = $rezultat->fetch_assoc()) {
        $korisnici[] = $red;
    };

    return $korisnici;

}

$korisnici = DajKorisnikeSaDomenom($baza, '@gmail.com');

if (count($korisnici) > 0) {
    echo "Korisnici sa domenom @gmail.com:<br>";
    foreach ($korisnici as $korisnik) {
        echo "ID: " . $korisnik['id'] . " - Email: " . $korisnik['email'] . "<br>";
    }
} else {
    echo "Nema korisnika sa datim domenom.";
}*/


/*
function DajKorisnikeSaDomenom($baza, $domen) {
    $upit = $baza->prepare("SELECT * FROM korisnici WHERE email LIKE ?");
    $pattern = "%" . $domen;
    $upit->bind_param("s", $pattern);
    $upit->execute();
    $rezultat = $upit->get_result();

    $korisnici = [];

    while ($red = $rezultat->fetch_assoc()) {
        $korisnici[] = $red;
    }

    $upit->close();

    return $korisnici;
}

$korisnici = DajKorisnikeSaDomenom($baza, '@hotmail.com');



 */