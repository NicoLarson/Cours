<?php
require('./controller/frontend.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == "signIn") {
        signIn();
    } elseif ($_GET['action'] == "logIn") {
        logIn();
    }
} else {
    home();
}
