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
    
      <?php if (isset($_SESSION['ime']) ):  ?>
        <p> Pozdrav <?= $_SESSION['ime']?></p>
            <form method="post" action="prekoni.php">
        <button type="submit" name="logout">Logout</button>
    </form>

        <?php else: ?>



       <form action="logika.php" method = "post">
        <input type="text" name= "ime">
        <button>Zapamti me!</button> 
       </form>

       
            <?php endif; ?>
</body>
</html>