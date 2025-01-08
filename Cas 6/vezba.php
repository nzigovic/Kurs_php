<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pin = $_POST['pin'] ?? ''; // Provera da li je 'pin' postavljen

    if (strlen($pin) < 4) {
        echo "Unesite najmanje 5 karaktera.";
    } else {
        echo "PIN je validan.";
    }
}
?>

