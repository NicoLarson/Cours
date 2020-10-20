<section>
    <?php
    // Chaine de caracteres
    $long = "<p>Bonjour tout le monde!</p>";


    // Méthode
    $printOut = strlen($long); //compter le nombre de caractères
    print $long . " nombre de caractères " . $printOut . "." . "<br>";
    $phrase = "bam bam bam";
    $jeux_de_mot = str_replace("b", "p", $phrase);
    print $phrase . "<br>";
    print $jeux_de_mot;
    /*

$object->calc(1,2); // depend de l'objet
calc("hello"); // independant de l'objet

*/

    $tab_lang = ["HTML", "PHP", 1990, false];
    print "<br>";
    print strlen($long);
    print "<br>";
    print count($tab_lang) . "<br>" . sizeof($tab_lang) . "<br>";
    print_r($tab_lang);
    print "<br>";
    print str_shuffle($long);
    print "<br>";
    print strtoupper($long);
    ?>
</section>