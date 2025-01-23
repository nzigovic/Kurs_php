<?php

$imena = ["marko", "petar", "ivan", "nadi"];

echo $imena[0];


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

    <?php foreach ($imena as $ime ) :?>
    <p><?=  $ime?></p>

    <?php endforeach; ?>

</body>
</html>