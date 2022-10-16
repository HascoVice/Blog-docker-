<?php include 'loginsql.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POST">

    <h1>Login</h1>

    <div>

    <label>Nom d'utilisateur</label>

    <input type="text"  name="username" placeholder="Nom d'utilisateur" required>

    </div>

    <br>
    <br>

    <div>
    <label>Mot de passe</label>

    <input type="password"  name="password" placeholder="Mot de passe" required>

    </div>

    <br>
    <div>

    <input type="submit" id='submit' name="submit" value='LOGIN' >

    </div>
</form>

</body>
</html>