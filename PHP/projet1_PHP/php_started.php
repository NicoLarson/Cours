<?php
include_once("./src/env_php.include.php");
include_once("./src/main_header.inc.php");
?>

<body>
    <header>
        <h1><?php print title . ' version php ' . $version ?></h1>
    </header>
    <!-- main -->
    <?php
    include_once("./src/main.inc.php");
    ?>
    <!-- end -->
    <footer>
        <p>&copy; - PHP - <?php print date('Y') ?></p>
    </footer>
</body>

</html>