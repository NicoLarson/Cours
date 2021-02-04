<?php
session_start();
$_SESSION['prenom'] = "Rasmus";
$_SESSION['nom'] = "Ledorf";
$_SESSION['age'] = 18;

require_once("./src/header.inc.php");
?>


<header>
    <h1>Les sessions</h1>
</header>
<main>
    <section>
        <p>
            Hello <?php print $_SESSION['prenom']; ?>
            <br>
            Tu es à l'acceuil de mon site
            <strong>
                <?php print $_SERVER['PHP_SELF'] ?>
            </strong><br>
            <a href="session_user_php.php">Veuillez vérifier vos informations</a>
        </p>
    </section>
</main>

<?php
/* session_destroy(); */
include_once('./src/footer.inc.php');
?>