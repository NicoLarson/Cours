<?php

require_once('./model/SignIn.php');
require_once('./model/LogIn.php');

function signIn()
{
    $insertUser = new SignIn;
    $insertUser->addUser();
    require('./view/frontend/signInView.php');
}

function logIn()
{
    $logIn = new LogIn;
    $logIn->logIn();
    require('./view/frontend/logInView.php');
}

function home()
{
    require('./view/frontend/homeView.php');
}
