<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
<link rel="stylesheet" href="./css/style.css" media="all">
</head>
<body>
   <header>
       <h1>Inscription</h1>
   </header>
<main>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<?php
include_once('./src/signin.inc.php');
?><fieldset> 
<legend>Inscription</legend>
 
       <label for="username">Nom utilisateur*</label>
        <input id="username" type="text" name="username">
        <label for="password">Mot de passe*</label>
        <input id="password" type="password" name="password">
        <label for="password-confirm">Confirmer le mot de passe*</label>
        <input id="password-confirm" type="password" name="password-confirm">
        <label for="mail">Mail*</label>
        <input id="mail" type="mail" name="mail">
        <input type="submit" value="S'inscrire">
</fieldset>
    </form>
<a href="./login.php">Se connecter</a>
</main>
</body>
</html>
