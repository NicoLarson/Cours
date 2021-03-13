<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=blog','nicolas','nicolas',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

$response = $bdd->query('SELECT * FROM commentaires order by id desc');
$article = $bdd->query('SELECT * FROM billets');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commentaires</title>
<link rel="stylesheet" href="style.css" media="all">
</head>
<body>
   <header>
       <h1>Mon super blog!</h1>
   </header>
<main>
<a href="index.php">Retour à la liste des billets</a>
<?php
while($data = $article->fetch()){
    if($_GET['article'] == $data['id']){
    echo "
            <article class=\"news\">
                <h3>".$data['titre']."</h3>
                <p>".$data['contenu']."</p>
            </article>
"; 
    }
}
$article->closeCursor();
?>
<section>
    <h2>Commentaires</h2>
    <ul>
<?php
while($data = $response->fetch()){
    if($_GET['article'] == $data['id_billet']){
        echo "
         <li>
            <p><strong>".$data['auteur']."</strong> le ".$data['date_commentaire']."</p>
            <p>".$data["commentaire"]."</p>
            <br>
        </li>
"; 
    }
}

?>
   </ul>
</section>
</main>
</body>
</html>
