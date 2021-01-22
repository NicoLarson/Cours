<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=posts;charset=utf8', 'Nicolas', 'Nicolas');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$recherche = $_GET['recherche'];
$sql = 'SELECT * FROM Content WHERE titre LIKE \'%' . $recherche . '%\'';
//
//if ($recherche == '') {
//    echo "<h1>Recherche vide</h1>";
//} else {
//
    $reponse = $bdd->query($sql);
    if(isset($recherche) AND !empty($recherche)){
        $rechercheVerif = htmlspecialchars($recherche);
        $article = $bdd->query('SELECT titre, contenu FROM post WHERE titre LIKE "%'.$rechercheVerif.'%" ORDER BY id_post DESC');
    }

    if($article->rowCount() > 0){
        while($donnee = $article-> fetch()){
            print '<article><h2>'.$donnee['titre'].'</h2>';
            print '<p>'.$donnee['titre'].'</p></article>';
        }
    }else{
      print '<p class="warning">Aucun résultat pour: '.$recherche.'</p>';
    }


//    if ($reponse->rowCount() != 0) {
//        while ($donnee = $reponse->fetch()) {
//            echo '<article>
//            <h2>' . $donnee['titre'] . '</h2>
//            <p>' . $donnee['contenu'] . '</p>
//            <time date="' . $donnee['date_modification'] . '">Date de modification: ' . $donnee['date_modification'] . '</time>        
//            </article>';
//        }
//    } else {
//        echo '<h1>Rien trouvé</h1>';
//    }
