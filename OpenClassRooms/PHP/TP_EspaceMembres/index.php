<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
<link rel="stylesheet" href="./css/style.css" media="all">
</head>
<body>
   <header>
       <h1>Page d'accueil</h1>
   </header>
<main>
<p>Bonjour <?php echo $_SESSION['login']; ?>! <br />
Tu es à l'accueil de mon site.</p>
<a href="./signout.php">Se déconnecter</a>
</main>
</body>
</html>

