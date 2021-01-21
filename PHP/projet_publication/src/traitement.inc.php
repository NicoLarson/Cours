<?php

try {
    // $bdd = new PDO('mysql:host=$host;dbname=$db;charset=$charset', '$user', '$pass');
    $bdd = new PDO('mysql:host=localhost;dbname=posts;charset=utf8', 'Nicolas', 'Nicolas');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Tester nos variable
if (isset($_POST['titre']) || isset($_POST['contenu'])) {
    if (!$_POST['titre'] || !$_POST['contenu']) {
        print "<p class=\"warning\">Vous avez oublié votre titre ou votre vontenu</p>";
    } else if (is_numeric($_POST['titre'])) {
        print "<p class=\"warning\">Vous devez saisir des caractère</p>";
    } else {
        $date_public = date('Y-m-d H:i:s'); // Date de création automatique
        $req = $bdd->prepare('INSERT INTO Content(titre, contenu, date_creation)VALUES(?,?,?)');
        $req->execute(array(htmlentities($_POST['titre']), ($_POST['contenu']), $date_public));
        echo '<p class=\"success\">Merci votre contenu est ajouté :
            <a href="publication.php">Voir les publications </a> 
            <br>
            <a href="./recherche.php">Recherche page</a>
        </p>';
    }
}
