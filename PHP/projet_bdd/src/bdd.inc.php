<?php
$host = 'localhost';
$db   = 'mydb';
$user = 'Nicolas';
$pass = 'Nicolas';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Selectionner la base
try { // On se connecte à MySQL
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));

    // On récupère tout le contenu   
    $reponse = $bdd->query('SELECT * FROM `Articles` WHERE 1');

    // On affiche chaque entrée une à une
    while ($donnee = $reponse->fetch()) {
        echo '<h2>Nom ' . $donnee['nom'] . '</h2>
        <figure>
            <figcaption>
                <ul>
                    <li>Marque ' . $donnee['marque'] . '</li>
                    <li>Capacité ' . $donnee['capacite'] . '</li>
                    <li>Consommation ' . $donnee['consommation'] . 'KW</li>
                    <li>Prix ' . $donnee['prix'] . '&euro;</li>
                    <li><img src="' . $donnee['image'] . '" alt="produit"></li>
                </ul>
            </figcaption>
            </figure>
            ';
    }
    $reponse->closeCursor(); // Terminer le traitement
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
