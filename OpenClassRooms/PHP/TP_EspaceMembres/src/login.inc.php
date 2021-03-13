<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=blog','nicolas','nicolas',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}catch(Exception $e){
    die('Erreur: '.$e->getMessage());
}

$login = $_POST['login'];

//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id, password FROM members WHERE username = :username');
$req->execute(array(
    'username' => $login));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);


if(isset($_POST['login'],$_POST['password'])){
    if (!$resultat)
    {
        echo '<p>Mauvais identifiant ou mot de passe !</p>';
    }
    else
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['login'] = $pseudo;
            header('Location: index.php');
        }
        else {
            echo '<p>Mauvais identifiant ou mot de passe !</p>';
        }

    }
}else{
    echo "<p>Veuillez remplir tous les champs</p>";
}


?>
