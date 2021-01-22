<?php
include_once('./src/header.inc.php');
?>
<header>
    <h1><?php print $titre ?></h1>
</header>
<main>
    <div class="form" role="region">
        <fieldset>
            <legend>Recherche</legend>
            <form action="" method="get">
                <label for="titre">Votre recherche</label>
                <input type="text" name="recherche" id="recherche" placeholder="Votre recherche" autofocus>
                 <input type="submit" value="Envoyer">
            </form>
        </fieldset>
    </div>
    <a href="./publication.php">Publication page</a>
    <br>
    <a href="./insert.php">Insert page</a>
    <?php include_once("./src/recherche_bdd.inc.php") ?>
</main>
<?php include_once('./src/footer.inc.php'); ?>


<!-- SELECT titre FROM 'content' WHERE LIKE "%html%" 

GET

-->

