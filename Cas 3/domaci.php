<?php


 echo "<script>setTimeout(function(){var tts = document.getElementsByTagName(\"title\");if(tts.length > 0)tts[0].innerHTML=\"Postani programer\"; else {var tt0 = document.createElement(\"TITLE\"); tt0.innerHTML = \"Postani programer\"; document.head.appendChild(tt0);}}, 200);</script>";


 $oNama = ["Glavno " => "index.html",
        "O nama " => "about.html",
          "Jos" => "more.html"
 ];


$trentanDatum = date("Y");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezba u PHP-u </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <?php
        foreach ($oNama as $imena => $links) {
            echo "<a href=\"$links\">$imena</a>";
        }
        ?>
    </div>

    <div class="footer">
        <?php
        echo "Copyright @ Mojsajt $trentanDatum" ;
        ?>
    </div>
</body>
</html>