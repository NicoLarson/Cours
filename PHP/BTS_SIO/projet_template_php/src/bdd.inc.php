<?php
$host = 'localhost';
$db   = '';
$user = '';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Selectionner la base
try { // On se connecte à MySQL
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));

    // On récupère tout le contenu   
    $reponse = $bdd->query('SELECT * FROM `offre`');

    // On affiche chaque entrée une à une
    while ($donnee = $reponse->fetch()) {
        echo '  <li>
            <figure>
                <img src="' . $donnee['image'] . '" alt="offre">
                <figcaption>
                    <h3>' . $donnee['titre'] . '</h3>
                    <p>' . $donnee['contenu'] . '
                    </p>
                </figcaption>
            </figure>
        </li>
            ';
    }
    $reponse->closeCursor(); // Terminer le traitement
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
