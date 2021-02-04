<?php

$host = '127.0.0.1';
$db   = 'posts';
$user = 'nicolas';
$pass = 'nicolas';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Selection de la base
try{
    $bdd = new PDO($dsn,$user,$pass);

}catch (Exception $e){
    die('Erreur: ' . $e->getMessage());
}

// Tester les variables
if (isset($_POST['titre']) || isset($_POST['contenu'])){
    if (!isset($_POST['titre']) || !isset($_POST['contenu'])){
        print '<p class="warning">Vous avez oublié votre titre ou votre contenu</p>';
    } else if (is_numeric($_POST['titre'])) {
        print '<p class="warning">Vous devez saisir des caractère</p>';
    } else {
        $date_public = date('Y-m-d H:i:s'); // Date de création automatique
        $req = $bdd->prepare('INSERT INTO content(titre, contenu, date_creation)VALUES(?,?,?)');
        $req->execute(array(htmlentities($_POST['titre']), ($_POST['contenu']), $date_public));
        echo '<p class=\"success\">Merci votre contenu est ajouté :
            <a href="publication.php">Voir les publications </a> 
            <br>
            <a href="./recherche.php">Recherche page</a>
            </p>';
    }}     
