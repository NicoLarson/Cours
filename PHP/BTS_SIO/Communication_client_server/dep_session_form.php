<?php
session_start();
require_once("./src/header.inc.php");
?>

<header>
    <h1>Session user</h1>
</header>
<main>
    <section>
        <h2>Votre connection</h2>
        <form action="<?php $_SERVER = ['PHP_SELF']; ?>" method="post">
            <label for="login">Votre login</label>
            <input type="text" name="login" id="login" placeholder="Votre login" aria-requiered="true" autofocus>
            <input type="submit" value="Send-me">
        </form>

        <?php
        if (isset($_POST['login'])) {
            if (!$_POST['login']) {
                print '<p class="warning">Saisir votre login!</p>';
            } else {
                $_SESSION['nom'] = $_POST['login'];
                print '<p class="success">Bonjour : ' . $_SESSION['nom'] . '</p>';
                print '<p><a href="success_login.php">Poursuivre vers vos informations</a></p>';
            }
        }
        ?>
    </section>


</main>


<?php include_once('./src/footer.inc.php'); ?>