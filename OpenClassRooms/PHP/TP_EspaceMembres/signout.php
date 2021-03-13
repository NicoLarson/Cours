<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
<link rel="stylesheet" href="./css/style.css" media="all">
</head>
<body>
   <header>
       <h1>Se déconnecter</h1>
   </header>
<main>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<?php
include_once('./src/signout.inc.php');
?>
    <a href="./login.php">Se déconnecter</a>
</main>
</body>
</html>

