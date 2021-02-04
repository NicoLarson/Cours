<?php
include_once('./src/header.inc.php');
?>
<header>
    <h1><?php print $titre ?></h1>
</header>
<main>
<?php include_once("./src/pub_bdd.inc.php") ?>
<a href="./insert.php">Insert page</a>

</main>
<?php include_once('./src/footer.inc.php'); ?>