<?php
 $ime = "Nadir";
 $godine = 21;

 echo "<script>setTimeout(function(){var tts = document.getElementsByTagName(\"title\");if(tts.length > 0)tts[0].innerHTML=\"Postani programer\"; else {var tt0 = document.createElement(\"TITLE\"); tt0.innerHTML = \"Postani programer\"; document.head.appendChild(tt0);}}, 200);</script>";


 $oNama = ["Glavno " => "#",
 "O nama " => "#",
  "Jos" => "#"
 ];



$products =[];

array_push($products,  "Pc", "Montior", "keyboard");

$prevraranjeUstring = implode("," , $products); // implode se koristi za pretvaranje u string 

echo $prevraranjeUstring;






?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezba u PHP-u </title>
</head>
<body>
    <div class="navbar">
          <?php
             foreach($oNama as $imena => $links){
                 echo "<a href=\"$links\">$imena</a>";
             };
        
    ?>
    </div>


    
</body>
</html>