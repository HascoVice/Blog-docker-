<?php  include 'signup.php'; 



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Coucou</title>
<link rel="stylesheet" href="register.css">
</head>
<body>

<?php
#$filter_email=filter_input(INPUT_POST,"email");
#$filter_username=filter_input(INPUT_POST,"username");
#$filter_password=filter_input(INPUT_POST,"password");
$pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");

?>
<form method="POST">
    <div class="div_bulle">

    <figure class="fig_bulle">

        <img src="./assets/pngbulle.png" alt="">

    </figure>
    </div>

    <div class="allform_register">

        <h1>Register</h1>

        <div class="div_input">

        <label>Nom d'utilisateur</label>


        <input class="inputs" type="text"  name="username" placeholder="Nom d'utilisateur" required>

        </div>
        <div>

        <label>Email</label>

        <input  class="inputs" type="email"  name="email" placeholder="email" required>

        </div>

        <div>

        <label>Mot de passe</label>

        <input class="inputs" type="password"  name="password" placeholder="Mot de passe" required>

        </div>

        <div>

        <input type="submit" id='submit' name="submit" value='LOGIN' >

        </div>
    </div>
</form>



</body>
</html>