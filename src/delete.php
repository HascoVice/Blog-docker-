<?php $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
 $pdo = new PDO('mysql:host=database:3306;dbname=php_db', "root", "password");
 $query= $pdo->prepare("DELETE FROM post WHERE id = ? ");
 $query->execute([$_GET['id']]);
 var_dump($_GET['id']);
 header('location:pageblog.php');