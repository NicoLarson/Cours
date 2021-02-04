<?php include_once('./src/header.inc.php') ?>

<main>
    <section>
        <h2>Inscription</h2>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" methode="post">
            <label for="mail">Adresse mail</label>
            <input type="email" name="mail" id="mail" placeholder="Votre email" aria-required="true" autofocus>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="password" aria-required="true">
            <input type="submit" value="Envoyer">
        </form>
        <?php

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'nicolas', 'nicolas');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        if (isset($_POST['mail']) || isset($_POST['password'])) {

            //on test les chaines de caractère//
            if (!$_POST['mail'] || !$_POST['password']) {
                echo "<p class=\"warning\">Vous avez obliez votre mail ou password?</p>";
            } else if (is_numeric($_POST['mail'])) {
                echo "<p class=\"warning\">Vous devez saisir des caractères</p>";
            } else {

                $req = $bdd->prepare('INSERT INTO user_log(login, password)VALUES(?,?,?)');
                $req->execute(array($_POST['mail'], $_POST['password']));

                echo "<p class=\"success\">Merci votre contenu est ajouté : 
                            <a href=\"select.php\" title=\"pub\">Voir les publications</a></p>";
            }
        }
        ?>

    </section>
</main>
<?php include_once('./src/footer.inc.php') ?>