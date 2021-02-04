<?php


if (isset($_GET['civilite'])) {
    $civ = $_GET['civilite'];
    // Condition expression ternaire
    print "<figure>";
    print  $civ == "femme" ? '<img src="https://i.imgur.com/OJJJx5M.png" alt="femme">'
        :
        '<img src="https://i.imgur.com/y55ss6k.png" alt="homme">';
    print  "<figcaption><h2>$civ</h2></figcaption>";
    print "</figure>";
} else {
    print "Error!!!";
}
