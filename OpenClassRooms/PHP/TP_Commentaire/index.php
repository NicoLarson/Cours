<?php 

try{
    $bdd = new PDO('mysql:host=localhost;dbname=blog','nicolas','nicolas',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

$response = $bdd->query('SELECT id, titre, contenu FROM billets order by id desc');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
<link rel="stylesheet" href="style.css" media="all">
</head>
<body>
   <header>
       <h1>Mon super blog!</h1>
   </header>
<main>
<p>Derniers billets du blog:</p>
    <ul>
<?php
while($data = $response->fetch()){
    echo "
        <li>
        <article class=\"news\">
            <h3>".$data['titre']."</h3>
            <p>".$data['contenu']."</br>
            <a href=\"commentaire.php?article=".$data["id"]."\">Commentaires</a></p>
        </article>
        </li>";
}
$response->closeCursor();
?>
    </ul>
</main>
</body>
</html>
