<?php


if (session_status() === PHP_SESSION_NONE) {
    session_start();
   
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
      <?php 
                if (isset($_SESSION['ime'])){
                    echo "pozz". $_SESSION['ime'];
                }
      ?>


       <form action="logika.php" method = "post">
        <input type="text" name= "ime">
        <button>Zapamti me!</button> 
       </form>

       

</body>
</html>