<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
<link rel="stylesheet" href="./css/style.css" media="all">
</head>
<body>
   <header>
       <h1>Se connecter</h1>
   </header>
<main>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<?php
include_once('./src/login.inc.php');
?>
<fieldset> 
<legend>Connexion</legend>
      <label for="login">Nom utilisateur*</label>
        <input id="login" type="text" name="login">
        <label for="password">Mot de passe*</label>
        <input id="password" type="password" name="password">
<label for="auto-login">Connexion automatique</label>
<input id="auto-login" type="checkbox" name="auto-login">
        <input type="submit" value="Connexion">
  </fieldset>
  </form>
<a href="./signin.php">S'inscrire</a>
</main>
</body>
</html>

