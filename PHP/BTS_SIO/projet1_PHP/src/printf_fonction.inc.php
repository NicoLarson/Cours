<?php
// créer des fonctions par la fonction printf

function printout()
{
    print sprintf("%s ", "Hello");
    print(sprintf("%s ", "Hello"));
    print sprintf("%s ", 2020);
    print sprintf("%f ", 7.5);
    print sprintf("%g ", 8.6546);
}
print "<p><code>";
printout();
print "</p></code>";

function user($nom, $age)
{
    print sprintf("Hello %s\n", $nom . " tu as " . $age . " ans.");
}
print "<p><code>";
user("Stan", 18);
print "</code></p>";


/* Suite de la fonction */
$name = "Anthony";
/* Fonction anonyme */
$displayInfo = function () use (&$name) {
    print sprintf("Bonjour %s ", $name);
};

$name = "Jon";

print "<p><code>";
$displayInfo();
print "</code></p>";
