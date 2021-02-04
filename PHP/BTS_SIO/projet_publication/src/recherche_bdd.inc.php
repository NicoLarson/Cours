<?php

$host = '127.0.0.1';
$db   = 'posts';
$user = 'nicolas';
$pass = 'nicolas';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try 
{
    $bdd = new PDO($dsn,$user,$pass);
} catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}

$recherche = $_GET['recherche'];
$sql = 'SELECT * FROM content WHERE titre LIKE \'%' . $recherche . '%\'';

$reponse = $bdd->query($sql);

if(isset($recherche) AND !empty($recherche))
{
    $rechercheVerif = htmlspecialchars($recherche);
    $article = $bdd->query('SELECT titre, contenu FROM post WHERE titre LIKE "%'.$rechercheVerif.'%" ORDER BY id_post DESC');
}

if($reponse->rowCount() > 0)
{
    while($donnee = $reponse-> fetch())
    {
        print '<h3>'.$recherche.'</h3>';
        print '<article><h2>'.$donnee['titre'].'</h2>';
        print '<p>'.$donnee['contenu'].'</p></article>';
    }
}
else
{
    print '<p class="warning">Aucun résultat pour: '.$recherche.'</p>';
}


