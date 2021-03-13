<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=blog','nicolas','nicolas',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}catch(Exception $e){
    die('Erreur: '.$e->getMessage());
}
$response = $bdd->query('SELECT * FROM members');
$req = $bdd->prepare('INSERT INTO members(username, password, email, register_date) VALUES(:username, :password, :email, CURDATE())');

// Username
$reqUsername = $bdd->query("SELECT username FROM members WHERE username = '".$_POST['username']."'");
$verifUsername =  $reqUsername->fetch(); 
$usernameExist = $verifUsername[0];

// Email
$mailRegex = "/(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)/"; 
$reqEmail = $bdd->query("SELECT email FROM members WHERE email = '".$_POST['mail']."'");
$verifEmail =  $reqEmail->fetch(); 
$emailExist = $verifEmail[0];


if(isset($_POST['username'],$_POST['password'],$_POST['mail'],$_POST['password-confirm'])){

    if($usernameExist == $_POST['username'])
    {
        echo "<p>Le pseudo est déjà utilisé.</p>";
    }elseif($_POST['password'] != $_POST['password-confirm']){
        echo "<p>Veuillez vérifier la saisi du mot de passe.</p>";
    }elseif(preg_match($mailRegex,$_POST['mail'])==0){
        echo "<p>Le format d'email est invalide</p>";
    }
    elseif($emailExist == $_POST['mail']){
        echo "<p>Cette email est déjà utilisé.</p>";
    }
    else
    {
        echo "<p>Inscription terminé</p>";
        $req->execute(array(
            'username' => $_POST['username'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'email' =>  $_POST['mail']));
    }






}else{
    echo "<p>Veuillez saisir tous les champs.</p>";
}
?>

