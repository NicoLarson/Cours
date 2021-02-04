<?php include_once('./src/header.inc.php'); ?>
<?php include_once('./src/traitement.inc.php'); ?>


<header>
    <h1><?php print $titre ?></h1>
</header>
<main>
    <div class="form" role="region">
        <fieldset>
            <legend>Poster vos publications</legend>
            <?php
            // $_SERVER['PHP_SELF']
            ?>

            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="titre">Saisir un titre</label>
                <input type="text" name="titre" id="titre" placeholder="Votre titre" autofocus>
                <label for="contenu">Insérer votre contenu</label>
                <textarea name="contenu" id="contenu" placeholder="Contenu"></textarea>
                <input type="submit" value="Envoyer">
            </form>
        </fieldset>
    </div>
    <a href="./publication.php">Publication page</a>
    <br>
    <a href="./recherche.php">Recherche page</a>

</main>
<?php include_once('./src/footer.inc.php'); ?>