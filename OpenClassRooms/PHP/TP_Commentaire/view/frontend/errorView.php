<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Page d'erreur !</h1>

<a href="index.php">Retour à la page d'accueil</a>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
