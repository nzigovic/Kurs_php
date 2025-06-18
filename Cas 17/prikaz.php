<?php   
if (session_status() === PHP_SESSION_NONE) {
    session_start();
   
}

echo $_SESSION ["ime"];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="prekoni.php">
    <button type="submit" name="logout">Logout</button>
</form>

    
</body>
</html>
