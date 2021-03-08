<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transfer</title>
</head>
<body>
<form action="<?php if ($_POST['password'] == 'php'){echo 'passport.php';}?>
" method="post">
        <label for="password">Mot de passe</label>
        <input id="password" name="password" type="text">
<input type="submit" value="Valider">
    </form>
</body>
</html>
