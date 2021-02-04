<?php

$host = '127.0.0.1';
$db   = 'biblio';
$user = 'nicolas';
$pass = 'nicolas';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


//traitement
if (function_exists($_GET['method'])) {
    $_GET['method']();
}
function getUser()
{
    // Selectionner la base
    try { // On se connecte à MySQL
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO($dsn,$user,$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));

        // On récupère tout le contenu   
        $response = $bdd->query('SELECT titre, auteur FROM `livre` WHERE 1');
        $livre = array();
        while ($data = $response->fetch()) {
            $livre[] = $data;
            print_r($livre);
        }
        
        // On récupère tout le contenu   
        $response->closeCursor(); // Terminer le traitement
        print json_encode($livre);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
