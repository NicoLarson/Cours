<?php
session_start();
require_once("./src/header.inc.php");
?>

<header>
    <h1>Les sessions réponses</h1>
</header>
<main>
    <section>
        <p>
            Bonjour! Vous êtes le : <?php print date("d/m/Y") ?>
            Je me souviens de toi! Tu t'appelles <?php print $_SESSION['prenom'] . " " . $_SESSION['nom'] . "<br> Tu as " . $_SESSION['age'] . "ans? C'est ça?"
                                                    ?>
        </p>
    </section>
</main>



<?php
include_once('./src/footer.inc.php');
?>