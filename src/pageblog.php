<?php
session_start();
$pdo = new PDO('mysql:host=database:3306;dbname=php_db', "root", "password");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['creer']))
    {
        
        $titre =htmlspecialchars($_POST['titre']);

      
        $texte =htmlspecialchars($_POST['texte']);

        if(!empty($titre) && !empty($texte) && isset($_SESSION['id']))
        {

            try {
                

                $queryy = $pdo->prepare("INSERT INTO post (titre, texte, user_id) VALUES (:titre, :texte, :user_id)");

                $queryy->execute([
                    ":titre" => $titre,
                    ":texte" => $texte,
                    ":user_id" => $_SESSION['id'],
                ]);
            }
            catch (Exception $e)
            {
                echo 'Erreur ! ' . $e;
            }
        }
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<article class="blogpost">
        <form method="post">

            <div>
            <label for="newPostTitle">Titre :</label>
            <input type="texte" name="titre">
            <textarea style="width: 100%; height: 50%; resize:none" rows="5" cols="30" name="texte" class="postBody" placeholder="Entrez votre texte ici"></textarea>
            <button class="createPost" name="creer">Créer</button>
            </div> 
        </form>
    </article>
</body>
</html>
<?php

    $query = $pdo->prepare("SELECT * FROM post inner join user on user.id=post.user_id");

    $query->execute();

    $allpost = $query->fetchAll(PDO::FETCH_ASSOC);

    if(count($allpost) > 0)
    {
        foreach($allpost as $onepost) {
            $id=$onepost['id'];
            
            echo '
                    <article class="blogpost">
                        <h3 class="postTitle">' . $onepost['titre'] . ', par '. $onepost['username'] .'</h3>
                        <p class="postBody">'. $onepost['texte'] .'</p>
                        <!--<a  href="delete.php?id='.$id.' "> Supprimer la conversation</a>-->
                            
                            
                        
                    </article>';
        }
    }

    ?>