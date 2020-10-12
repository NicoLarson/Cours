<?php

include_once("./src/env_php.include.php");
include_once("./src/main_header.inc.php");

?>

<body>
    <header>
        <h1><?php print title . ' version php ' . $version ?></h1>
    </header>

    <main>
        <!-- tableaux -->
        <?php
        $user = array(
            "François",
            "Michel",
            "Nicolas"
        );
        /* variable globale */
        $language = ["fr", "us"];
        $language[0] = "fr";
        $language[1] = "us";

        $gamers = array(
            0 => "Caroline",
            1 => "Mathieu",
            2 => "Nick",
            3 => "Tavarez"
        );

        print "<pre>";
        print_r($gamers);
        print "<pre>";

        /* tableau de produits 
        Machine à laver
        Marque : Samsung
        Capacité : 25kg
        Consommation : 100 KW
        Prix : 300€ */

        $produit = ([
            "Marque" => "Samsung",
            "Capacité" => "25kg",
            "Consommation" => "100 KW",
            "Prix" => "300€",
            "image" => '<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.samsung.com%2Fis%2Fimage%2Fsamsung%2Fza_WF8500NHS-XFA_001_Front%3F%24L2-Thumbnail%24&f=1&nofb=1" alt="">'
        ]
            /* 
        [
            "Marque" => "Apple",
            "Capacité" => "5kg",
            "Consommation" => "100 KW",
            "Prix" => "899€"
            "image" => "?
                    ] */);
        print "<pre>";
        print_r($produit);
        print "<pre>";

        /* table vide */
        $allTable = [];
        array_push($allTable, "apple", "Samsung", "?", 1);
        print "<pre>";
        print_r($allTable);
        print "<pre>";


        $fusion_arr = array_merge($allTable, $produit, $gamers);
        print "<pre>";
        print_r($fusion_arr);
        print "<pre>";

        /* Itérations 
        for(), for in, foreach, while(), while do()
        */
        $progs = ["HTML", "CSS", "JS", "PHP", "Java", "Python", "Ruby"];
        $index = 0;

        print "<section>";
        /* for ($index = 0; $index < count($progs); $index++) {
            echo ($index.": ".$progs[$index] . "<br>");
        } */

        /* while ($index < count($progs)) {
            echo ($index . ": " . $progs[$index] . "<br>");
            $index++;
        } */

        foreach ($produit as $key => $valeur) {
            echo ($key . ": " . $valeur . "<br>");
        }

        print "</section>";



        ?>

    </main>


    <footer>
        <p>&copy; - PHP - <?php print date('Y') ?></p>
    </footer>
</body>

</html>