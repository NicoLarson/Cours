<?php
$host = 'localhost';
$db   = '';
$user = 'nicolas';
$pass = 'nicolas';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try
{ 
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));

    // On récupère tout le contenu   
    $reponse = $bdd->query('SELECT * FROM `livre` WHERE 1');

    // On affiche chaque entrée une à une
    while ($donnee = $reponse->fetch()) 
    {
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
            </figure>';
    }
    $reponse->closeCursor(); // Terminer le traitement
}
catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}
