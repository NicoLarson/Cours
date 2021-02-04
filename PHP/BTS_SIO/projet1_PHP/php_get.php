<?php
include_once("./src/env_php.include.php");
include_once("./src/main_header.inc.php");
?>

<body>
    <header>
        <h1><?php print title . ' version php ' . $version ?></h1>
    </header>
    <!-- main -->
    <p>
        <a href="php_get.php?civilite=homme">Vous êtes un homme</a><!--
         --><a href="php_get.php?civilite=femme">Vous êtes une femme</a>
    </p>
    <?php
    include_once("./src/get_choix.inc.php");
    ?>
    <!-- end -->
    <footer>
        <p>&copy; - PHP - <?php print date('Y') ?></p>
    </footer>
</body>

</html>