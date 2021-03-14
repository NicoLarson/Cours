<?php 
$title = 'Inscription'; 
ob_start();
?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<?= $insertUser->addUser();  ?>
<fieldset> 
<legend><?= $title ?></legend>
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
<a href="index.php?action=logIn">Se connecter</a>
<?php
$content = ob_get_clean();

require('template.php');
?>
