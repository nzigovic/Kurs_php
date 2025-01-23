<?php


$nasolovi = [
        "Glavno" => "index.php",
        "Admin" => "admin.php",
        "Login" => "login.php"

];


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

    <div class="naslov">


        <?php foreach ($nasolovi as $naslov => $link) :?>
        <a href="<?= $link?>"><?= $naslov?></a>
        <?php endforeach; ?>
    </div>

</body>
</html>
