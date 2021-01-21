<?php

$host = '127.0.0.1';
$db   = 'posts';
$user = 'Nicolas';
$pass = 'Nicolas';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Selectionner la base
try { // On se connecte à MySQL
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));

    // On récupère tout le contenu   
    $reponse = $bdd->query('SELECT * FROM `Content` ORDER BY date_modification DESC LIMIT 5');

    // On affiche chaque entrée une à une
    while ($donnee = $reponse->fetch()) {
        echo '<article>
        <h2>' . $donnee['titre'] . '</h2>
        <p>' . $donnee['contenu'] . '</p>
        <time date="'.$donnee['date_modification'].'">Date de modification: ' . $donnee['date_modification'] . '</time>        
        </article>';
    }
    $reponse->closeCursor(); // Terminer le traitement

} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
