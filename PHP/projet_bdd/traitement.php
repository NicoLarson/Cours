<?php
//traitement
if (function_exists($_GET['method'])) {
    $_GET['method']();
}
function getUser()
{
    // Selectionner la base
    try { // On se connecte à MySQL
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=biblio', 'Nicolas', 'Nicolas', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));

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
