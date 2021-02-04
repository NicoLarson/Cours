<?php include_once('./src/header.inc.php') ?>
<main>
    <section>
        <h2>Navigation</h2>
        <p>
            <?php
            if (isset($_GET['page'])) {
                //stocker la variabe GET
                $root = $_GET['page'];
                if ($root == 1) {
                    print "Page 1";
                }
                if ($root == 2) {
                    include_once('./src/message.inc.php');
                }
                if ($root == 3) {
                    print "Page 3";
                } else if ($root > 3 || $root <= 0) {
                    print "Petit coquin!";
                }
            } else {
                print "Page 1";
            }
            ?>
        </p>
    </section>
</main>
<?php include_once('./src/footer.inc.php') ?>