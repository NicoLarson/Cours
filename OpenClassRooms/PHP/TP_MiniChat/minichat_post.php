<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=minichat','nicolas','nicolas',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch(Exception $e){
    die ('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare("INSERT INTO chat (pseudo,message) VALUE (:pseudo,:message)");
if($_POST['pseudo']!="" && $_POST['message']!=""){
$req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'message' => $_POST['message']));
}else{
echo "<p>Veuillez remplir tous les champs.</p>";
}


$response = $bdd->query('SELECT pseudo, message FROM chat ORDER BY id DESC LIMIT 10');



?>
