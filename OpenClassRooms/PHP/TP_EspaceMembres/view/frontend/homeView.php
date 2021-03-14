<?php 
$title = 'Acceuil'; 
ob_start();
?>
<ul>
    <li><a href="index.php?action=logIn">Se connecter</a></li>
    <li><a href="index.php?action=signIn">S'inscrire</a></li>
</ul>
<?php
$content = ob_get_clean();

require('template.php');
?>
