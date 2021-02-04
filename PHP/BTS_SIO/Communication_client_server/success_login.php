<?php
session_start();
require_once("./src/header.inc.php");
?>



<header>
    <h1><?php "Welcome " . $_SESSION["nom"] ?></h1>
</header>
<main>
    <section>
        <p>Hello! Vous êtes <?php echo $_SESSION["nom"] . " nous somme le " . date('d/m/Y'); ?>
    </section>
</main>
<?php
require_once("./src/footer.inc.php");
?>

