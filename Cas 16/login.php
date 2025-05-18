<?php

















?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="login-container">
    <form action="modeli/logInUser.php" method="post" class="login-form">
        <h2>Prijava</h2>
        <input type="email" name="email" placeholder="Unesite vaš email" >
        <input type="password" name="sifra" placeholder="Unesite vašu lozinku" >
        <button type="submit">Uloguj me</button>

        <h4>Ulogujte se kao <a href="#">User</a> </h4>
    </form>
</div>
</body>
</html>
