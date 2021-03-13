<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=videogame','nicolas','nicolas',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch(Exception $e){
    die ('Erreur : '.$e-getMessage());
}

$requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console = ?');
$requete->execute(array($_GET['console']));

while($donnee = $requete->fetch()){
    echo '<p>'.$donnee['console'].'-'.$donnee['nom'].'</p><br>';
}

$requete->closeCursor();
?>
