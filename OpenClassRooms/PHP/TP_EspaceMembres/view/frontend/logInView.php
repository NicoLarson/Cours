<?php 
$title = 'Connection'; 
ob_start();
?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<?= $logIn->logIn();  ?>

<fieldset> 
<legend><?= $title ?></legend>
       <label for="username">Nom utilisateur*</label>
        <input id="username" type="text" name="username">
        <label for="password">Mot de passe*</label>
        <input id="password" type="password" name="password">
        <input type="submit" value="S'inscrire">
</fieldset>
    </form>
<a href="index.php?action=signIn">S'inscrire</a>
<?php
$content = ob_get_clean();

require('template.php');
?>
