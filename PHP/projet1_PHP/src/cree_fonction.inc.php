<?php
// Crée function
function def()
{
    // Fonction déclarative
    $nom = "Leford";
    $prenom = "Rasmus";
    $date = date("Y");
    $nav = $_SERVER['HTTP_USER_AGENT'];
    echo "<p>Je m'appelle : ", $nom, " ", $prenom,
        "et mon prénom contient ",
        strlen($prenom),
        " caractères &copy; : ",
        $date,
        "<br>",
        $nav,
        "</p>";
}
def();
// Fonction avec les paramètres
function userWeb($nom, $prenom, $date, $ip)
{
    // Fonction déclarative
    echo "<p>Je m'appelle : ", $nom, " ", $prenom,
        " et mon prénom contient ",
        strlen($prenom),
        " caractères &copy; : ",
        $date,
        "<br>",
        $ip,
        "</p>";
}
userWeb("Larson", "Nico", date("d/m/Y/:h:i"), $_SERVER['REMOTE_ADDR']);

// Fonction anonyme
$message = function ($nom, $msg) {
    return "<p>Bonjour : " . $nom . " " . $msg . "</p>";
};
print $message("Rasmus", "Ceci est une fonction anonyme");
