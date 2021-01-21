<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=posts;charset=utf8', 'Nicolas', 'Nicolas');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$recherche = $_GET['recherche'];
$sql = 'SELECT * FROM Content WHERE titre LIKE \'%' . $recherche . '%\'';

if ($recherche == '') {
    echo "<h1>Recherche vide</h1>";
} else {

    $reponse = $bdd->query($sql);

    if ($reponse->rowCount() != 0) {
        while ($donnee = $reponse->fetch()) {
            echo '<article>
            <h2>' . $donnee['titre'] . '</h2>
            <p>' . $donnee['contenu'] . '</p>
            <time date="' . $donnee['date_modification'] . '">Date de modification: ' . $donnee['date_modification'] . '</time>        
            </article>';
        }
    } else {
        echo '<h1>Rien trouvé</h1>';
    }
}
