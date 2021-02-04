<main>
    <section>
        <h2>Nous somme le <?php print $date ?></h2>
        <?php
        echo "<p>Votre navigateur est: " . $prop_navigator . "<br>\n
            Votre adresse IP est: " . $addr_ip . "<br>\n
            Nous contacter: " . $admin . "<br>\n
            <strong>Server:</strong> </p>" . $signature;

        ?>
    </section>
</main>