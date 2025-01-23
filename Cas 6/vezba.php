<?php
if (isset($_POST["pin"])) {
    $pin = $_POST['pin']; 

    if ($pin < 4) {
        echo "Unesite najmanje 4 karaktera.";
    }else if($pin > 6){
        echo "maximum je 6 karaktera";
    }
    else {
        echo "PIN je validan.";
    }
};





?>


