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
        try { // On se connecte à MySQL
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO('mysql:host=localhost;dbname=inscription', 'nicolas', 'nicolas', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));

            // On récupère tout le contenu de la table livre
            $reponse = $bdd->query('SELECT login, password FROM  user_log limit 1');

            while ($data = $reponse->fetch()) {
                $data['login'];
                $data['password'];

                if (isset($_GET['mail']) && isset($_GET['password'])) {
                    $login = $_GET['mail'];
                    $mdp = $_GET['password'];

                    if (!$login || !$mdp) {
                        echo "<p class=\"warning\">Vous avez obliez votre mail ou password?</p>";
                    } else if ($login != $data['login'] || $mdp != $data['password']) {
                        echo "<p class=\"warning\">Erreur login ou mot de passe?</p>";
                    } else {
                        echo "<p class=\"success\">Votre login est " . $login . "
                            votre mot de passe est " . $mdp . "</p>";
                    }
                }
            }
            $reponse->closeCursor();
        } catch (Exception $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }

        ?>



    </section>
</main>
<?php include_once('./src/footer.inc.php') ?>