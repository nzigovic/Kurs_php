<?php
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        die("Niste uneli Email!");
    }

    if (!isset($_POST['sifra']) || empty($_POST['sifra'])) {
        die("Niste uneli šifru!");
    }

    $email = $_POST['email'];
    $password = password_hash($_POST['sifra'], PASSWORD_BCRYPT);

    require_once "baza.php";

    // Proveri da li već postoji korisnik sa tim emailom
    $provera = $baza->prepare("SELECT id FROM korisnici WHERE email = ?");
    $provera->bind_param("s", $email);
    $provera->execute();
    $provera->store_result();

    if ($provera->num_rows > 0) {
        // Korisnik već postoji
        echo "Već ste registrovani sa ovim emailom!";
        $provera->close();
        $baza->close();
        exit();z``
    }
    $provera->close();

    $stmt = $baza->prepare("INSERT INTO korisnici (email, sifra) VALUES (?, ?)");


     $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        echo "Uspešno ste registrovani!";
    } else {
        echo "Greška prilikom registracije: " . $stmt->error;
    }

    $stmt->close();
    $baza->close();
